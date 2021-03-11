<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('OID');
            $table->string('Hallname');
            $table->string('Halladdress');
            $table->string('Halltype');
            $table->string('Dish1');
            $table->string('Dish2');
            $table->string('Dish3');
            $table->string('Dish4');
            $table->string('Dish5');
            $table->string('Dish6');
            $table->integer('Hallcapacity');
            $table->integer('Hallparking');
            $table->binary('Snap1');
            $table->binary('Snap2');
            $table->binary('Snap3');
            $table->binary('Snap4');
            $table->binary('Snap5');
            $table->integer('FoodAmount');
            $table->integer('HallAmount');
            $table->string('amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halls');
    }
}
