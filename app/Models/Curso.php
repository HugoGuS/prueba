<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $filable = ['name','descripcion','categoria']; //filable indica a laravel los campos que se desa utilizar en el model
    protected $guarded=[];//guarded indica a Laravel los campos que no se desan usar en el model
}
