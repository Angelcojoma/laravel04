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
        Schema::create('estudiante1s', function (Blueprint $table) {
            $table->id();
            $table->string('codEst', 10);
            $table->string('nomEst', 50);
            $table->string('apeEst', 50);
            $table->date('fnaEst');
            $table->integer('turMat');
            $table->integer('senMat');
            $table->integer('estMat');
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
        Schema::dropIfExists('estudiante1s');
    }
};
