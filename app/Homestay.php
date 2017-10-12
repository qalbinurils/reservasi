<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $table='homestays';
    protected $primarykey='id';
    protected $fillable = [
      'name',
      'address',
      'description',
      'harga'
    ];
}
