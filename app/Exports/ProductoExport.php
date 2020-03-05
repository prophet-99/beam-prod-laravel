<?php

namespace App\Exports;

use App\ProductoModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class ProductoExport implements FromCollection{

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){

        $productoModel = new ProductoModel();

        return $productoModel 
                -> select('productos.id', 'productos.descripcion as producto', 'productos.fkCategoria', 'ct.descripcion as categoria', 
                'productos.fkUnidad', 'un.descripcion as unidad', 'productos.fkMarca', 'm.descripcion as marca', 'productos.pVenta', 
                'productos.pCompra', 'ct.orden')
                ->join('categorias as ct', 'ct.id', '=', 'productos.fkCategoria')
                ->join('unidades as un', 'un.id', '=', 'productos.fkUnidad')
                ->join('marcas as m', 'm.id', '=' , 'productos.fkMarca')
                ->where('productos.eliminar', false) 
                ->orderBy('ct.orden')
                -> get();;
    }
}
