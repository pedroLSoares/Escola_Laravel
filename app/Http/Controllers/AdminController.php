<?php


namespace App\Http\Controllers;


use App\Models\Aluno;
use App\Models\Professor;

class AdminController extends Controller
{
    public function PainelControle()
    {
        $alunos = Aluno::all();
        $professores = Professor::all();

        return view('Paginas.painel-controle',compact('alunos','professores'));

    }

}
