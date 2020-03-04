<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadModel extends Model{
    
    protected $table="unidades";
    protected $fillable = ["descripcion", "abreviatura", "eliminar"];
}
