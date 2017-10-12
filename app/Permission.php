<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $table='permissions';
  protected $primarykey='id';
  protected $fillable = [
    'id_roles',
    'description'
    ];
}
