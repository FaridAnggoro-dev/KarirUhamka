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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vacanci_id')->constrained();
            $table->string('company');
            $table->string('slug', 100);
            $table->string('location');
            $table->string('type');
            $table->string('experience');
            $table->string('salary');
            $table->string('major');
            $table->string('graduate');
            $table->string('career');
            $table->text('requirement');
            $table->text('description');
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
        Schema::dropIfExists('details');
    }
};
