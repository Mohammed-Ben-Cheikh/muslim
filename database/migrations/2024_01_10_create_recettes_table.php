<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->text('ingredients');
            $table->text('instructions');
            $table->string('image');
            $table->integer('cooking_time');
            $table->integer('preparation_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recettes');
    }
};
