<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\models\Alunos;

class AlunosController extends Controller
{
    
    public function getAllAlunos()
    {
    
       $data = Alunos::getAll();

       return response()->json($data['data'],$data['status']);
    
    }

    //
}
