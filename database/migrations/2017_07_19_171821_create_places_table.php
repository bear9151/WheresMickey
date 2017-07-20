<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('place_name');
            $table->string('land');
            $table->string('park');
            $table->string('site');
            $table->string('type');
            $table->boolean('photos')->nullable();
            $table->boolean('autographs')->nullable();
            $table->boolean('fastpass')->nullable();
            $table->boolean('seasonal')->nullable();
            $table->string('img_url', 2000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
