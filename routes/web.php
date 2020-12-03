<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Paginas/principal');
});

Route::get('/espaco-aluno','App\Http\Controllers\AlunoController@espacoAluno')->middleware('autenticador');
Route::post('/notaAluno','App\Http\Controllers\AlunoController@gerenciaNota')->middleware('autenticador');
Route::get('/espaco-professor','App\Http\Controllers\ProfessorController@espacoProfessor')->middleware('autenticador');

Route::get('/painel-controle', 'App\Http\Controllers\AdminController@PainelControle')->middleware('autenticador');
Route::post('/painel-controle-cad-aluno','App\Http\Controllers\CadastroController@cadastraAluno')->middleware('autenticador');
Route::post('/painel-controle-cad-professor','App\Http\Controllers\CadastroController@cadastraProfessor')->middleware('autenticador');

Route::post('/entrar','\App\Http\Controllers\EntrarController@entrar');





Route::get('/sair',function (){
    \Illuminate\Support\Facades\Auth::logout();
    session()->forget(['tipo_acesso']);
    return redirect('/');
});
