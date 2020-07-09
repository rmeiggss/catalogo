<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso');
            $table->string('semana_labor');
            $table->string('dia_labor');
            $table->integer('hora_inicial');
            $table->integer('hora_final');
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
        Schema::dropIfExists('horario_cursos');
    }
}
