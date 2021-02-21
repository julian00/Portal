<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            //el mensaje dice si la propiedad cambio el valor, se vendio, etc
            $table->text('message');
            $table->timestamps();
            
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_ownership')->references('id')->on('ownerships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
