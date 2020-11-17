<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $fillable = ['nome','curso','usuario_id'];
    public $timestamps = false; //faz com que não insira os dados de create at e etc

    public function notas()
    {
        return $this->hasMany(NotasAluno::class);
    }
}
