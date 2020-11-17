<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $table = 'professores';
    public $fillable = ['nome','usuario_id'];
    public $timestamps = false; //faz com que não insira os dados de create at e etc

    public function materias()
    {
        return $this->hasMany(Materia::class);
    }
}
