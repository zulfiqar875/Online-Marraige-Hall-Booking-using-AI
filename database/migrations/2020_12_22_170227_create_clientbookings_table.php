<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientbookings', function (Blueprint $table) {
            $table->bigIncrements('cbid');
            $table->integer('cid');
            $table->integer('OID');
            $table->string('hallname');
            $table->string('halladdress');
            $table->string('halltype');
            $table->string('hallcapacity');
            $table->string('hallparking');
            $table->string('dish1');
            $table->string('dish2');
            $table->string('dish3');
            $table->string('dish4');
            $table->string('dish5');
            $table->string('dish6');
            $table->string('amount');
            $table->string('booking');
            $table->string('bookingdate');
            $table->string('status');
            $table->string('rating');
            $table->string('feedback');
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
        Schema::dropIfExists('clientbookings');
    }
}
