<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageInstall;

class ImageInstallationMaintenenceController extends Controller
{
    public function index()
    {
        return ImageInstall::all();
    }

    public function show($id)
    {
        $imageInstallationMaintenence = ImageInstall::find($id);
        if (!empty($imageInstallationMaintenence)) {
            return $imageInstallationMaintenence;
        } else {
            return response(['message' => 'image/install não encontrado']);
        }
    }

    public function create(Request $request)
    {

        $path = \Storage::disk('s3')->put('logos', $request->file);
        return ImageInstall::create(['name' => $path]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
        ]);

        $imageInstallationMaintenence = ImageInstall::find($id);

        if (!empty($imageInstallationMaintenence)) {
            $imageInstallationMaintenence->fill($validatedData);
            $imageInstallationMaintenence->save();
            return $imageInstallationMaintenence;
        } else {
            return response(['message' => 'image/install não encontrado']);
        }
    }

    public function destroy($id)
    {
        $imageInstallationMaintenence = ImageInstall::find($id);

        if (!empty($imageInstallationMaintenence)) {
            ImageInstall::find($id)->delete();
        } else {
            return response(['message' => 'image/install não encontrado']);
        }
    }
}
