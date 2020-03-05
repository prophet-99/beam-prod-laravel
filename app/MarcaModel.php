<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaModel extends Model{

    protected $table="marcas";
    protected $fillable = ["descripcion", "abreviatura", "eliminar"];
}
