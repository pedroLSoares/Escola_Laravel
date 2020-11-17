<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $fillable = ['nome','id_professor'];
    public $timestamps = false; //faz com que não insira os dados de create at e etc
}
