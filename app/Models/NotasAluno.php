<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasAluno extends Model
{
    public $timestamps = false;

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
