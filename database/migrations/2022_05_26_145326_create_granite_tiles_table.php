<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('granite_tiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('length');
            $table->integer('width');
            $table->integer('amount');
            $table->integer('price');
            $table->string('website');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('granite_tiles');
    }
};
