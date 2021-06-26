<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallationController extends Controller
{
    public function create(Request $request)
    {
        foreach($request->images as $image) {
            dd($image);
        }

        return $request;
    }
}
