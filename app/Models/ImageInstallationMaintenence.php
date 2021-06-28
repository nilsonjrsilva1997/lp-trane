<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImagesInstall;
use App\Models\MaintenanceInstallation;

class ImageInstallationMaintenence extends Model
{
    use HasFactory;

    protected $connection= 'mysql_trane';

    protected $fillable = [
        'image_id',
        'maintenance_installation_id',
    ];

    protected $table = 'tb_pivot_image_maintenance_installation';

    public function images()
    {
        return $this->belongsTo(ImagesInstall::class, 'image_id', 'id');
    }

    public function maintenance_installations()
    {
        return $this->belongsTo(MaintenanceInstallation::class, 'maintenance_installation_id', 'id');
    }
}
