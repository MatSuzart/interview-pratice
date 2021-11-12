<?php

use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'mat'=> '',
            'nome'=> 'JOSE DE ALENCAR, RUA DAS ALMAS',
            'endereço'=> '',
            'cidade'=> 'NATAL'
        ]);

        DB::table('usuarios')->insert([
            'mat'=> '',
            'nome'=> 'JOÃO JOSÉ, AVENIDA RUY CARNEIRO',
            'endereço'=> '',
            'cidade'=> 'JOÃO PESSOA'
        ]);

        DB::table('usuarios')->insert([
            'mat'=> '',
            'nome'=> 'MARIA JOAQUINA, RUA CARROSSEL',
            'endereço'=> '',
            'cidade'=> 'RECIFE'
        ]);

        DB::table('usuarios')->insert([
            'mat'=> '2015010101',
            'nome'=> 'MARIA DAS DORES, RUA DAS LADEIRAS',
            'endereço'=> '',
            'cidade'=> 'FORTALEZA'
        ]);

        DB::table('usuarios')->insert([
            'mat'=> '2015010101',
            'nome'=> 'JOSUÉ CLAUDINO DOS SANTOS, CENTRO',
            'endereço'=> '',
            'cidade'=> 'NATAL'
        ]);

        DB::table('usuarios')->insert([
            'mat'=> '2015010101',
            'nome'=> 'JOSUÉLISSON CLAUDINO DOS SANTOS',
            'endereço'=> '',
            'cidade'=> 'NATAL'
        ]);


    }
}
