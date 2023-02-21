<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id('id');
            $table->string('station_code');
            $table->string('station_name');
            $table->string('station_name_ar');
            $table->string('region');
            $table->string('phone');
            $table->text('image');
            $table->string('lat');
            $table->string('lng');
            $table->text('address');
            $table->text('address_ar');
            $table->text('questions');
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
        Schema::dropIfExists('stations');
    }
}
