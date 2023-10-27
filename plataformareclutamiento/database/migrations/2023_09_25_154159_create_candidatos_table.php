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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('rut',12);
            $table->string('nombres',100);
            $table->string('apellidopaterno',100);
            $table->string('apellidomaterno',100);
            $table->date('fechanacimiento');
            $table->string('email',45);
            $table->string('telefono',45);
            $table->integer('idestadocivil');     
            $table->string('nacionalidad',45);    
            $table->string('idioma',45);
            $table->string('direccion',100);      
            $table->integer('idpais');
            $table->integer('idregion');
            $table->integer('idcomuna');
            $table->integer('idgenero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
