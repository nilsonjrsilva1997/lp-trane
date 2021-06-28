<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class State extends Model
{
    use HasFactory;

    protected $connection= 'mysql';

    protected $fillable = ['state_id', 'state_country_id', 'state_code', 'state_name', 'state_active'];

    protected $table = 'tb_states';

    public function users()
    {
        return $this->belongsTo(User::class, 'usu_state_id', 'state_id');
    }
}
