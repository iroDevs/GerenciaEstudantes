<?php

namespace Database\Seeders;

use Database\Seeders\AlunosSeed as SeedersAlunosSeed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $alunosSeed = new AlunosSeed();

       $alunosSeed->seedAlunos();
    }
}
