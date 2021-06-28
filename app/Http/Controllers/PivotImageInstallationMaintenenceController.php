<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageInstallationMaintenence;

class PivotImageInstallationMaintenenceController extends Controller
{
    public function index()
    {
        return ImageInstallationMaintenence::all();
    }

    public function show($id)
    {
        $imageInstallationMaintenence = ImageInstallationMaintenence::find($id);
        if (!empty($imageInstallationMaintenence)) {
            return $imageInstallationMaintenence;
        } else {
            return response(['message' => 'Image/install não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'image_id' => 'required|integer|exists:mysql_trane.tb_images_maintenance_installations,id',
            'maintenance_installation_id' => 'required|integer|exists:mysql_trane.tb_maintenance_or_installations,id',
        ]);

        return ImageInstallationMaintenence::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image_id' => 'integer|exists:mysql_trane.tb_images_maintenance_installations,id',
            'maintenance_installation_id' => 'integer|exists:mysql_trane.tb_maintenance_or_installations,id',
        ]);

        $imageInstallationMaintenence = ImageInstallationMaintenence::find($id);

        if (!empty($imageInstallationMaintenence)) {
            $imageInstallationMaintenence->fill($validatedData);
            $imageInstallationMaintenence->save();
            return $imageInstallationMaintenence;
        } else {
            return response(['message' => 'Image/install não encontrado']);
        }
    }

    public function destroy($id)
    {
        $imageInstallationMaintenence = ImageInstallationMaintenence::find($id);

        if (!empty($imageInstallationMaintenence)) {
            ImageInstallationMaintenence::find($id)->delete();
        } else {
            return response(['message' => 'Image/install não encontrado']);
        }
    }
}
