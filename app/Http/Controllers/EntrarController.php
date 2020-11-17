<?php


namespace App\Http\Controllers;






use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EntrarController extends Controller
{
    public function entrar(Request $request)
    {
        if (!Auth::attempt($request->only(['email','password']))) {//auth attempt, tenta realizar o login, laravel
            return redirect()->back()->withErrors('Usuário e/ou senha incorretos');

        }
        $usuario = DB::table('users')->where('email','=',$request->email)->first();

        session(['tipo_acesso' => $usuario->tipo_acesso]);
        session(['id_usuario' => $usuario->id]);

        return redirect()->back();

    }

}
