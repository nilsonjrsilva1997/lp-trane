<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceInstallation;

class MaintenanceInstallationController extends Controller
{
    public function index()
    {
        return MaintenanceInstallation::with('technician')
        ->with('image_maintenance_installations.images')
        ->get();
    }

    public function show($id)
    {
        $maintenanceInstallation = MaintenanceInstallation::with('technician')
                                    ->where(['id' => $id])
                                    ->first();
                                    
        if (!empty($maintenanceInstallation)) {
            return $maintenanceInstallation;
        } else {
            return response(['message' => 'instalação ou manutenção não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:maintenance,installation',
            'description' => 'required|string|max:255',
            'usu_id' => 'required|integer|exists:mysql.tb_users,usu_id',
            'zip_code' => 'required|formato_cep'
        ]);

        return MaintenanceInstallation::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:maintenance,installation',
            'description' => 'required|string|max:255',
            'usu_id' => 'required|integer|exists:mysql.tb_users,usu_id',
            'zip_code' => 'formato_cep'
        ]);

        $maintenanceInstallation = MaintenanceInstallation::find($id);

        if (!empty($maintenanceInstallation)) {
            $maintenanceInstallation->fill($validatedData);
            $maintenanceInstallation->save();
            return $maintenanceInstallation;
        } else {
            return response(['message' => 'instalação ou manutenção não encontrado']);
        }
    }

    public function destroy($id)
    {
        $maintenanceInstallation = MaintenanceInstallation::find($id);

        if (!empty($maintenanceInstallation)) {
            MaintenanceInstallation::find($id)->delete();
        } else {
            return response(['message' => 'instalação ou manutenção não encontrado']);
        }
    }
}
