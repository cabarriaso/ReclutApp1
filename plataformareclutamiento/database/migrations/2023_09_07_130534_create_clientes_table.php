<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('giro',100);
            $table->string('rut',10);
            $table->string('razonsocial',100);
            $table->string('direccion',100);
            $table->integer('idpais');
            $table->integer('idregion');
            $table->integer('idcomuna');
            $table->string('telefono',45);
            $table->string('email',45);
            $table->string('anofundacion',4);
            $table->string('nombrecontacto',45);
            $table->string('cargocontacto',45);
            $table->string('telefonocontacto',45);
            $table->string('emailcontacto',45);
            $table->boolean('esestudiojuridico');
            $table->string('socioadministrador',45);
            $table->integer('numerosocios');
            $table->integer('numerossociossenior');
            $table->integer('numerossociosjunior');
            $table->string('gerentegeneral',45);
            $table->string('gerenteadminfin',45);
            $table->string('gerentecomunicaciones',45);
            $table->integer('numpersonaladmin');
            $table->string('industria',45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
