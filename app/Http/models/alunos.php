<?php

namespace App\Http\Models;


use App\Models\Aluno;
use App\Http\Interface\IAlunos;
use Illuminate\Support\Facades\Date;

class Alunos implements IAlunos
{
    public string $nome;
    public string $curso;
    public int $nota;
    public ?int $id;
    
    
    public function __construct(string $nome,string $curso,int $nota,?int $id = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->curso = $curso;
        $this->nota = $nota;
    }

    private function mapToEntity(int $id):void
    {
        $aluno = Aluno::where('id',$id)->first();

        $this->nome = $aluno['nome'];
        $this->curso = $aluno['curso'];
        $this->nota = $aluno['nota'];
        $this->id = $aluno['id'];
    }

    private function isDuplicate(string $nome):bool
   {
        $aluno = Aluno::where('nome',$nome)->exists();
        return $aluno;
    }
 
    public function create(): array
    {
        if($this->isDuplicate($this->nome))
            return $data = [ "data" => "usuario ja existe" , "status" => 400];

        $newAluno = new Aluno;
        $newAluno->nome = $this->nome;
        $newAluno->curso = $this->curso;
        $newAluno->nota = $this->nota;
    
        $newAluno->save();

        $data = [
            "data" => $newAluno,
            "status" => 201
        ];

        return $data;
    }

    public static function getAll():array
    {
       
        $allAlunos = Aluno::all();
        $data = [
            'data' => $allAlunos,
            'status' => 200,
        ];

        return $data;
    }

    public static function getById(int $id):array
    {
        $aluno = Aluno::where('id',$id)->first();
        $data = [
            'data' => $aluno,
            'status' => 200,
        ];

        return $data;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getCurso():string
    {
        return $this->curso;
    }

    public function getNota():int
    {
        return $this->nota;
    }
}
