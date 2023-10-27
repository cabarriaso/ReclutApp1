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
        Schema::create('estudioscandidatos', function (Blueprint $table) {
            $table->id();
            $table->integer('idcandidato');
            $table->integer('idnivelestudio');
            $table->integer('idinstitucion');
            $table->integer('idpais');
            $table->integer('idregion');
            $table->integer('idcomuna');
            $table->integer('ranking');
            $table->integer('anoingreso');
            $table->integer('anoegreso');
            $table->integer('promnotas');
            $table->integer('notaexamgrado');
            $table->date('fechatitulacion');
            $table->date('fechajuramento');
            $table->string('nombreestudio',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudioscandidatos');
    }
};
