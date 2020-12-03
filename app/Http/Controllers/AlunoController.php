<?php


namespace App\Http\Controllers;




use App\Models\Aluno;
use App\Models\NotasAluno;
use App\Models\User;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function espacoAluno(Request $request)
    {
        $aluno = Aluno::query()->where('usuario_id','=',session('id_usuario') )->first();
        $nome = $aluno->nome;
        $semestre = $aluno->Semestre;
        $ra = $aluno->RA;

        $notas = NotasAluno::query()->where('id_aluno','=',$aluno->id)->get();


        $imagem_perfil = User::query()->where('id','=',session('id_usuario'))->value('url_foto');


        if (!$imagem_perfil){
            $imagem_perfil = "https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb---cone-de-perfil-de-usu--rio-azul-by-vexels.png";
        }

    return view('Paginas.espaco-aluno',['notas'=>$notas, 'nome' => $nome,'imagem_perfil' => $imagem_perfil, 'semestre' => $semestre,'ra' => $ra]);

}

    public function retornaTodasAsNotas($curso)
    {

        $notas = NotasAluno::query()->where('materia','=',$curso)->get();
        $notasPorAluno = [];
        foreach ($notas as $nota){
            $notasPorAluno[$nota->id_aluno] = ['nota_1bim' => $nota->nota_1bim, 'nota_2bim' => $nota->nota_2bim];
        }


        return $notasPorAluno;

    }

    public function gerenciaNota(Request $request)
    {
        $data = $request->except('_token');
        if (is_null($data['nota_1bim'])){
            $data['nota_1bim'] = 0;
        }
        if (is_null($data['nota_2bim'])){
            $data['nota_2bim'] = 0;
        }


        $aluno = NotasAluno::query()->where('id_aluno','=',$data['id_aluno'])->where('materia','=',$data['materia'])->first();
        if (is_null($aluno)){
            NotasAluno::create(['materia'=> $data['materia'],'nota_1bim' => $data['nota_1bim'],'nota_2bim'=>$data['nota_2bim'],'id_aluno' => $data['id_aluno']]);
            return redirect()->back();
        }



        $aluno->nota_1bim = $data['nota_1bim'];
        $aluno->nota_2bim = $data['nota_2bim'];

        $aluno->save();
        return redirect()->back();

    }

}
