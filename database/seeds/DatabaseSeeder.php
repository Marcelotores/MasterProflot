<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(SalaTableSeeder::class);
        $this->call(TurmaTableSeeder::class);
         $this->call(AlunoTableSeeder::class);
          $this->call(FluxoTableSeeder::class);
           $this->call(PeriodoTableSeeder::class);
         $this->call(DisciplinaTableSeeder::class);
          $this->call(FuncionarioTableSeeder::class);
           $this->call(ProfessorTableSeeder::class);   

        Model::reguard();
    }
}
