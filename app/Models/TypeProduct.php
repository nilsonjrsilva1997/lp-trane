<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    use HasFactory;

    protected $connection= 'mysql';

    protected $fillable = [
        'type_id', 
        'type_name', 
        'type_status', 
        'type_date_created', 
        'type_date_updated'
    ];

    protected $table = 'tb_types';
}
