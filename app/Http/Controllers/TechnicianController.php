<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class TechnicianController extends Controller
{
    public function searchTechnician(Request $request)
    {
        $request->validate([
            'zip_code' => 'string|required|formato_cep',
            'radius' => 'required|integer'
        ]);
        
        return back();
    }

    public function searchByLocation(Request $request)
    {
        $request->validate([
            'cep_ou_local' => 'required|in:CEP,LOCAL'
        ]);

        $latitudeClient = null;
        $longitudeClient = null;

        if($request['cep_ou_local'] == 'CEP') {
            $validatedData = $request->validate([
                'zip_code' => 'required|string|formato_cep',
            ]);

            $responseViaCep = Http::get('https://viacep.com.br/ws/'. $validatedData['zip_code'] .'//json/', []);

            $addressString = ($responseViaCep['bairro'] . ', ' .
                                $responseViaCep['localidade'] . ' - ' .
                                $responseViaCep['uf'] . ', Brazil');

            $responseMapBox = Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/' 
                                    . $addressString. '.json?access_token='
                                    . env('MAP_BOX_TOKEN'));

            $latitudeClient = $responseMapBox['features'][0]['geometry']['coordinates'][1];
            $longitudeClient = $responseMapBox['features'][0]['geometry']['coordinates'][0];
        } else {
            $validatedData = $request->validate([
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
            ]);

            $latitudeClient = $validatedData['latitude'];
            $longitudeClient = $validatedData['longitude'];
        }

        $validatedData = $request->validate([
            'radius' => 'required|numeric'
        ]);

        $haversineQuery = "(6371 * acos(cos(radians(".$latitudeClient."))
        * cos(radians(usu_latitude))
        * cos(radians(usu_longitude)
        - radians(".$latitudeClient."))
        + sin(radians(".$latitudeClient."))
        * sin(radians(usu_latitude))))";

        $technicians = User::query()
            ->select("*", \DB::raw($haversineQuery. " as distance"))
            ->whereRaw($haversineQuery." < ".$validatedData['radius'])
            ->join('tb_user_certificates', 
            'tb_user_certificates.certuser_user_id', 
            '=', 
            'tb_users.usu_id')
            ->where(['tb_user_certificates.certuser_status' => 'approved'])
            ->whereRaw("tb_user_certificates.certuser_date_expiration > '" . Carbon::today() . "'")
            ->get();

          return $technicians;
    }
}