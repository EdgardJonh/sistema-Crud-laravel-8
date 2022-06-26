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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('num_Orden', 255);
            $table->date('fecha');
            $table->string('serie', 255);
            $table->string('n_ocumento', 255);
            $table->string('Estado_Equipo', 255);
            $table->string('tecnico', 255);
            $table->string('fecha_Entrega', 255);
            $table->string('personal_Retiro', 255);
            $table->string('Acta_de_Entrega', 255);
            $table->string('num_info_Tec_Baja', 255);
            $table->string('foto_Info_Tec', 255);
            $table->string('num_Resulucion_Baja', 255);
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
        Schema::dropIfExists('equipos');
    }
};
