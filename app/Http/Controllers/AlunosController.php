<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\models\Alunos;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class AlunosController extends Controller
{
    
    public function getAllAlunos(): JsonResponse
    {
    
       $data = Alunos::getAll();

       return response()->json($data['data'],$data['status']);
    
    }

    public function getAlunoById(int $id): JsonResponse
    {
        $data = Alunos::getById($id);

        return response()->json($data['data'],$data['status']);
    }

    public function createAluno(Request $request)
    {
        $nome = $request->nome;
        $nota = $request->nota;
        $curso = $request->curso;
        
        $newAluno = new Alunos($nome,$curso,$nota);
        $data = $newAluno->create();
        
        return response()->json($data['data'],$data['status']);
    }
}
