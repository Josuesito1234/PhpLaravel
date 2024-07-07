<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteGrupo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'docente_grupo';
    protected $fillable = [
        'docente_id',
        'grupo_id',
    ];

    public function docente(){
        return $this->belongsto(Docente::class);
    }
    public function grupo(){
        return $this->belongsto(Grupo::class);
    }
}