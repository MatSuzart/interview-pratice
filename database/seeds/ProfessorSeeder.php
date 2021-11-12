<?php

use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            'mat'=> '',
            'nome'=> 'NICKERSON FERREIRA, RUA MANAÍRA',
            'endereço'=> '',
            'cidade'=> 'JOÃO PESSOA'
        ]);

        DB::table('professores')->insert([
            'mat'=> '',
            'nome'=> 'ADORILSON BEZERRA, AVENIDA SALGADO FILHO',
            'endereço'=> '',
            'cidade'=> 'NATAL'
        ]);

        DB::table('professores')->insert([
            'mat'=> '',
            'nome'=> 'DIEGO OLIVEIRA, AVENIDA ROBERTO FREIRE',
            'endereço'=> '',
            'cidade'=> 'JOÃO PESSOA'
        ]);
    }
}
