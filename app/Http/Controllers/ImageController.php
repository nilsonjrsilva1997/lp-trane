<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function show($image)
    {
        return \Storage::disk('s3')->response('logos/' . $image);
    }
}
