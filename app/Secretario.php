<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretario extends Model
{
     public $fillable = ['matricula_secretario','inicio_mandato_secretario', 'termino_mandato_secretario','nome_secretario',
    'telefone_secretario','endereco_secretario'];

}
