<?php

namespace App\Http\Models;

use App\Models\Aluno;

class Alunos
{
    public string $nome;
    public string $curso;
    public int $nota;
    
    
    public function __construct(string $curso = null,string $nome= null,int $nota = null)
    {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->nota = $nota;
    }

    public static function getAll()
    {
       
        $allAlunos = Aluno::all();
        $data = [
            'data' => $allAlunos,
            'status' => 200,
        ];

        return $data;
    }
}
