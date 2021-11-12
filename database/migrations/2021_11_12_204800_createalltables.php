<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createalltables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table){

            $table->id();
            $table->string('mat');
            $table->string('nome');
            $table->string('endereço');
            $table->string('cidade');
        });

        Schema::create('disciplinas', function(Blueprint $table){

            $table->id();
            $table->string('cod_disc');
            $table->string('nome_disciplina');
            $table->string('carga_hor');
        });

        Schema::create('professores', function(Blueprint $table){

            $table->id();
            $table->string('mat');
            $table->string('nome');
            $table->string('endereco');
            $table->string('cidade');
        });


        Schema::create('turma', function(Blueprint $table){

            $table->id();
            $table->string('cod_disc');
            $table->string('id_turma');
            $table->string('id_professores');
            $table->datetime('ano');
            $table->string('horario');
        });


        Schema::create('historico', function(Blueprint $table){

            $table->id();
            $table->string('mat_alunos');
            $table->string('cod_disc');
            $table->string('id_turma');
            $table->string('frequencia');
            $table->string('nota');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('usuario');
        Schemma::dropIfExists('desciplinas');
        Schemma::dropIfExists('disciplinas');
        Schemma::dropIfExists('professores');
        Schemma::dropIfExists('turma');
        Schemma::dropIfExists('historico');

    }
}
