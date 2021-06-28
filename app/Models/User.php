<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCertificate;
use App\Models\State;
use App\Models\MaintenanceInstallation;

class User extends Model
{

    protected $connection = 'mysql';

    protected $fillable = [
        'usu_id',
        'usu_name',
        'usu_email',
        'usu_password',
        'usu_cpf',
        'usu_birthdate',
        'usu_token',
        'usu_token_expiration',
        'usu_date_created',
        'usu_date_updated',
        'usu_status',
        'usu_token_password',
        'usu_email_signup',
        'usu_newsletter',
        'usu_flag_password',
        'usu_logo',
        'usu_cep',
        'usu_latitude',
        'usu_longitude',
        'usu_geocode', 
        'usu_state_id',
        'usu_city_id',
        'usu_validate_cep',
        'usu_cnpj',
        'usu_phone',
        'usu_last_login'
    ];

    protected $hidden = [
        'usu_password',
        'usu_token',
        'usu_token_password'
    ];

    protected $table = 'tb_users';

    public function certificate()
    {
        return $this->hasOne(UserCertificate::class, 'certuser_user_id', 'usu_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'usu_state_id', 'state_id');
    }

    public function maintenance_or_installations()
    {
        return $this->hasMany(MaintenanceInstallation::class, 'usu_id', 'usu_id');
    }
}
