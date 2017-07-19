<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CharacterPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_place', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id');
            $table->integer('place_id');
            $table->enum('frequency', ['Never', 'Occasionally', 'Always', 'Multiple'])->default('Always');
            $table->enum('category', ['Corporate Costume', 'Show Specific', 'Puppet', 'Static Figure', 'Animatronic', 'Digital'])->default('Corporate Costume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_place');
    }
}
