<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model{
    
    protected $table="productos"; 
    protected $fillable = ["descripcion", "fkCategoria", "fkMarca", "fkUnidad", "pVenta", "pCompra", "eliminar"];
}
