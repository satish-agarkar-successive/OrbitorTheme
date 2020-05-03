<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public $timestamps = false;
    
    protected $table = 'users';
    protected $primaryKey = 'id';


    protected $fillable = ['id','user_name','user_mobile','user_address','user_email','user_gender','user_state','user_city','zip','user_activation_date','user_renewal_date','user_deal_value','user_status'];

}
