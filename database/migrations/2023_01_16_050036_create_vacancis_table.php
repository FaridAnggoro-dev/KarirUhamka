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
        Schema::create('vacancis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categori_id')->constrained();
            $table->string('logo');
            $table->string('job');
            $table->string('slug', 100);
            $table->text('skill');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancis');
    }
};
