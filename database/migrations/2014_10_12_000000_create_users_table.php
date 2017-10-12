<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_roles')->unsigned();
            $table->integer('total_saldo');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_roles')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');

    }

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

