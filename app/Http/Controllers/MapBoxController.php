<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapBoxController extends Controller
{
    public function reverseLocation(Request $request) {

        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $responseMapBox = Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/' .$request->latitude. ',' .$request->longitude. '.json?access_token='
        . env('MAP_BOX_TOKEN'));

        return $responseMapBox;
    }
}
