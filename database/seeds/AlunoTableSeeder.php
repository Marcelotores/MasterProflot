<?php

use Illuminate\Database\Seeder;
use MasterProflot\Models\Aluno;
class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aluno::class,10)->create();
    }
}
