<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'id_roles', 'total_saldo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function saldo(){
      return $this->hasMany('App\Saldo');
    }

    public function role(){
      return $this->belongsTo('App\Role');
    }

    public function permission(){
      return $this->hasManyThrough('App\Role', 'App\Permission');
    }

}
