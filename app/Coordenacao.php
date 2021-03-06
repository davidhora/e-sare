<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenacao extends Model
{
    public $fillable = ['tipo_coordenacao', 'portaria_nomeacao_coordenacao', 'inicio_mandato_coordenacao', 'termino_mandato_coordenacao',
        'fk_professor'];

    public function professor() {
        return $this->belongsTo(Professor::class, 'fk_professor');
    }

    public function colegiado() {
        return $this->hasOne(Colegiado::class);
    }
    
     public function departamento() {
        return $this->hasOne(Departamento::class);
    }
    
    public function area(){
         return $this->hasOne(Area::class);
    }

}
