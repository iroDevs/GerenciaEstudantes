<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AlunosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function seedAlunos()
    {
        DB::table('alunos')->insert([
            'nome' => 'pedro',
            'nota' => 100,
            'curso' => 'Desenvovimento de software',
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Leo',
            'nota' => 30,
            'curso' => 'Matematica Avaçada',
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Carlos',
            'nota' => 60,
            'curso' => 'Engenharia',
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Emanuele',
            'nota' => 20,
            'curso' => 'Direito',
        ]);
    }
}
