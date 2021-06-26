<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certuser_id', 
        'certuser_cert_id', 
        'certuser_status', 
        'certuser_file', 
        'certuser_date_created', 
        'certuser_date_updated', 
        'certuser_date_approved', 
        'certuser_user_id',
        'certuser_token', 
        'certuser_doc_type', 
        'certuser_doc_value', 
        'certuser_date_expiration', 
        'certuser_notify_expiration', 
        'certuser_rejectinfo',
        'certuser_token'
    ];

    protected $hidden = [
        'certuser_token'
    ];

    protected $table = 'tb_user_certificates';

    public function user()
    {
        return $this->belongsTo(User::class, 'certuser_user_id', 'usu_id');
    }
}
