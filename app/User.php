<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function saldo(){
//      return $this->hasMany('App\Saldo');
//    }
//
//    public function role(){
//      return $this->belongsTo('App\Role');
//    }
//
//    public function permission(){
//      return $this->hasManyThrough('App\Role', 'App\Permission');
//    }

}
