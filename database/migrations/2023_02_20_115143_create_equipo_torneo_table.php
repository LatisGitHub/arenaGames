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
        Schema::create('equipo_torneo', function (Blueprint $table) {
            $table->foreignId('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreignId('torneo_id')->references('id')->on('torneos')->onDelete('cascade');
            $table->primary(['equipo_id', 'torneo_id']);
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
        Schema::dropIfExists('equipo_torneo');
    }
};
