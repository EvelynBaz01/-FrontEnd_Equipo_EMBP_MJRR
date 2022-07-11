<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $fillable = [
        'id',
        'imagen',
        'nombre',
        'a_paterno',
        'a_materno',
        'usuario',
        'password'
    ];
}
