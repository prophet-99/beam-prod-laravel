<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model{

    protected $table="categorias";
    protected $fillable = ["descripcion", "abreviatura", "orden", "eliminar"];
}
