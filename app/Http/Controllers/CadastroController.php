<?php


namespace App\Http\Controllers;





use App\Models\Aluno;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function cadastraAluno(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] =Hash::make($data['password']);

        $data['tipo_acesso'] = 'aluno';

        $user = User::create($data);



        Aluno::create(['nome' => $data['name'], 'curso' => $data['curso'], 'usuario_id' => $user->id]);

        return redirect()->back();


    }
    public function cadastraProfessor(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] =Hash::make($data['password']);

        $data['tipo_acesso'] = 'professor';

        User::create($data);

        $usuario_id = User::latest()->first()->id;

        Professor::create(['nome' => $data['name'],'usuario_id' => $usuario_id,'materia'=> $data['materia']]);

        return redirect()->back();


    }

}
