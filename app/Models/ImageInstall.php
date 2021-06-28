<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageInstallationMaintenence;

class ImageInstall extends Model
{
    use HasFactory;
    protected $connection = 'mysql_trane';

    protected $table = 'tb_images_maintenance_installations';


    protected $fillable = [
        'name',
    ];

    public function image_maintenance_installations()
    {
        return $this->hasMany(ImageInstallationMaintenence::class);
    }
}
