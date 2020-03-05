<?php

namespace App\Http\Controllers;

use App\ProductoModel;
use Illuminate\Http\Request;

class RoutingController extends Controller{
    

    public function __construct(){
    
        $this -> middleware('auth') -> only('listas');
    }

    public function inicio(ProductoModel $productoModel){

        $productos = $productoModel 
                        -> select('productos.id', 'productos.descripcion as producto', 'productos.fkCategoria', 'ct.descripcion as categoria', 
                         'ct.orden', 'productos.fkUnidad', 'un.descripcion as unidad', 'productos.fkMarca', 'm.descripcion as marca', 
                         'productos.pVenta', 'productos.pCompra', 'ct.orden')
                        ->join('categorias as ct', 'ct.id', '=', 'productos.fkCategoria')
                        ->join('unidades as un', 'un.id', '=', 'productos.fkUnidad')
                        ->join('marcas as m', 'm.id', '=' , 'productos.fkMarca')
                        ->where('productos.eliminar', false) 
                        ->orderBy('ct.orden')
                        -> get();


        return view('pages.principal', compact('productos'));
    }

    public function listas(){

        return view('pages.listas');
    }
}
