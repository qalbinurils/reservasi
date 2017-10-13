<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::enableForeignKeyConstraints();
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_homestay')->usigned();
            $table->integer('id_user')->unsigned();
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('total_harga');
            $table->timestamps();

//            $table->foreign('id_homestay')->references('id')->on('homestays')->onDelete('cascade');
//            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }

    public function user(){
        return $this->hasMany('App\User');
    }

    public function homestay(){
        return $this->hasMany('App\Homestay');
    }
}
