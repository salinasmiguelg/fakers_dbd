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
        Schema::create('seccions', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_seccion');
            $table->string('profesor');
            $table->string('horario');
            $table->unsignedBigInteger('id_cursos');
            $table->foreign('id_cursos')->references('id')->on('cursos')->onDelete('cascade'); //cambie el plural en ferias ->feria
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
        Schema::dropIfExists('seccions');
    }
};
