<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownerships', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->timestamps();
            $table->tinyInteger('ambiences');
            $table->tinyInteger('bedrooms');
            $table->tinyInteger('bathrooms');
            $table->year('year_of_construction');
            $table->boolean('plans');
            $table->smallInteger('meters_built')->unsigned();
            $table->smallInteger('total_meters')->unsigned();
            $table->mediumInteger('price');
            $table->smallInteger('expenses')->unsigned();
            $table->tinyInteger('garages');
            $table->boolean('deed');
            $table->boolean('gas_work_a_day');
            $table->string('writing_desk',45);

            $table->foreignId('id_currency')->references('id')->on('currencies');
            $table->foreignId('id_ownership_type')->references('id')->on('ownership_types');
            $table->foreignId('id_orientation')->references('id')->on('orientations');
            $table->foreignId('id_operation')->references('id')->on('operations');
            $table->foreignId('id_neighborhood')->references('id')->on('neighborhoods');
            $table->foreignId('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownership');
    }
}
