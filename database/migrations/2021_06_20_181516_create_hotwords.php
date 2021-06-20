<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotwords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotwords', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hotwords');
            $table->string('uuid');
            $table->string('type');
            $table->string('from')->nullable();
            $table->string('from_who')->nullable();
            $table->integer('length');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotwords');
    }
}
