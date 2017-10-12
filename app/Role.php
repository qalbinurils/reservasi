<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table='roles';
  protected $primarykey='id';
  protected $fillable = [
    'name'
    ];
}
