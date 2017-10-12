<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
  protected $table='saldos';
  protected $primarykey='id';
  protected $fillable = [
    'description',
    'saldo'
  ];
}
