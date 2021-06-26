<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCertificate;
use App\Models\State;

class CertificateUserController extends Controller
{
    public function mapData(Request $request)
    {
        $states = State::all();
        $response = [];

        

        foreach($states as $state) {

            $number = UserCertificate::where(['certuser_status' => 'approved'])
            ->with('user.state')
            ->join('tb_users', 'tb_users.usu_id', '=', 'tb_user_certificates.certuser_user_id')
            ->whereRaw('tb_users.usu_state_id = ' . $state['state_id'])
            ->count();

            $response[mb_strtolower($state['state_code'])] = [[
                'state' => $state['state_name'],
                'number_technician' => $number
            ]];        
        }
        return $response;
        // selecionando estados do banco


        
        

        
    }
}
