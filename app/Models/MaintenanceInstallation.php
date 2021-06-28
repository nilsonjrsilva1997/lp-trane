<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ImageInstallationMaintenence;

class MaintenanceInstallation extends Model
{
    use HasFactory;

    protected $connection= 'mysql_trane';

    protected $fillable = [
        'description',
        'type',
        'usu_id',
        'zip_code',
    ];

    protected $table = 'tb_maintenance_or_installations';

    public function technician()
    {
        return $this->belongsTo(User::class, 'usu_id', 'usu_id');
    }

    public function image_maintenance_installations()
    {
        return $this->hasMany(ImageInstallationMaintenence::class);
    }
}
