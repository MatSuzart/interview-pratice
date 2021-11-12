<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlunoSeeder::class);
        $this->call(DisciplinasSeeder::class);
       // $this->call(HistoricoSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(TurmaSeeder::class);
    }
}
