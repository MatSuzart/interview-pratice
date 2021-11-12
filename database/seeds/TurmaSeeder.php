<?php

use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turma')->insert([
            'cod_disc'=> 'BD',
            'id_turma'=> '1',
            'id_professores' => '1',
            'ano'=> '2015',
            'horario' => '11H-12H'
        ]);

        DB::table('turma')->insert([
            'cod_disc'=> 'BD',
            'id_turma'=> '2',
            'id_professores' => '1',
            'ano'=> '2015',
            'horario' => '13H-14H'
        ]);

        DB::table('turma')->insert([
            'cod_disc'=> 'BD',
            'id_turma'=> '1',
            'id_professores' => '1',
            'ano'=> '2015',
            'horario' => '11H-12H'
        ]);

        DB::table('turma')->insert([
            'cod_disc'=> 'POO',
            'id_turma'=> '1',
            'id_professores' => '1',
            'ano'=> '2015',
            'horario' => '08H-09H'
        ]);

        DB::table('turma')->insert([
            'cod_disc'=> 'WEB',
            'id_turma'=> '1',
            'id_professores' => '1',
            'ano'=> '2015',
            'horario' => '07H-08H'
        ]);

        DB::table('turma')->insert([
            'cod_disc'=> 'ENG',
            'id_turma'=> '1',
            'id_professores' => '1',
            'ano'=> '2015',
            'horario' => '10H-11H'
        ]);


    }
}
