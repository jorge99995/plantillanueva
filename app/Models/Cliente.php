<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'nombres',
        'dni',
        'celular',
        'correo',
        "lugar_trabajo",
        "area",
        'ciudad',
        'codigo',
        'registro' ,
        'fecha_emision',
        'horas_lectivas' ,
        'fecha_inicio' ,
        'fecha_fin' ,
        'tema_curso' ,
        'nota',
    ];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
