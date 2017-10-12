<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $table='transactions';
  protected $primarykey='id';
  protected $fillable = [
    'id_homestay',
    'id_user',
    'checkin',
    'checkout',
    'total_harga'
  ];

  public function user(){
    return $this->hasMany('App\User');
  }

  public function homestay(){
    return $this->hasMany('App\Homestay');
  }
}
