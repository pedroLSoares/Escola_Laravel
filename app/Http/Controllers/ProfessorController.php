<?php


namespace App\Http\Controllers;


use App\Models\Aluno;
use App\Models\Professor;
use App\Models\User;

class ProfessorController
{
    public function espacoProfessor()
    {
        //busca os alunos dos CURSOS
        $alunosGTI = Aluno::all()->where('curso','=','GTI');
        $alunosADS = Aluno::all()->where('curso','=','ADS');


        $nomeProfessor = Professor::query()->where('usuario_id','=',session('id_usuario') )->value('nome');


        $imagem_perfil = User::query()->where('id','=',session('id_usuario'))->value('url_foto');
        if (!$imagem_perfil){
            $imagem_perfil = "https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb---cone-de-perfil-de-usu--rio-azul-by-vexels.png";
        }




        //busca materia professor logado
        $materia = Professor::query()->where('usuario_id','=',session('id_usuario'))->value('materia');


        //retorna as notas
        $notas = new AlunoController();
        $notasGTI = $notas->retornaTodasAsNotas($materia);


        //separa aluno por semestre
        foreach ($alunosGTI as $aluno){
            $alunosGTISemestre[$aluno->Semestre][]= $aluno;
        }

        foreach ($alunosADS as $aluno){
            $alunosADSSemestre[$aluno->Semestre][]= $aluno;
        }




        return view('Paginas.espaco-professor',compact('alunosGTI','nomeProfessor','imagem_perfil','alunosADS','notasGTI','alunosGTISemestre','alunosADSSemestre','materia'));

    }


}
