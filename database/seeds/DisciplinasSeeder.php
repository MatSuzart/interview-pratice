<?php

use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            'cod_disc' =>'BD',
            'nome_disciplina'=> 'BANCO DE DADOS',
            'carga_hor'=> '100',
        ]);

        DB::table('disciplinas')->insert([
            'cod_disc' =>'POO',
            'nome_disciplina'=> 'PROGRAMAÇÃO COM ACESSO A BANCO DE DADOS',
            'carga_hor'=> '100',
        ]);

        DB::table('disciplinas')->insert([
            'cod_disc' =>'WEB',
            'nome_disciplina'=> 'AUTORIA WEB',
            'carga_hor'=> '50',
        ]);

        DB::table('disciplinas')->insert([
            'cod_disc' =>'ENG',
            'nome_disciplina'=> ' ENGENHARIA DE SOFTWARE',
            'carga_hor'=> '80',
        ]);

    }
}
