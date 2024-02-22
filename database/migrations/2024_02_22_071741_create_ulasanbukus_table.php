<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanbukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasanbukus', function (Blueprint $table) {
            $table->id();
            $table->integer('UlasanID');
            $table->integer('User_ID');
            $table->integer('BukuID');
            $table->string('Penerbit');
            $table->integer('Rating');

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
        Schema::dropIfExists('ulasanbukus');
    }
}
