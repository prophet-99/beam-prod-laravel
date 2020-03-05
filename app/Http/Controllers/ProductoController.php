<?php

namespace App\Http\Controllers;

use App\CategoriaModel;
use App\MarcaModel;
use App\ProductoModel;
use App\UnidadModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ProductoModel $productoModel,
                            CategoriaModel $categoriaModel, MarcaModel $marcaModel,
                            UnidadModel $unidadModel){
        
        if($request->ajax()){
            $productos = $this -> getProductos();

            $unidades = $unidadModel -> where('eliminar', false) -> get();
            $marcas = $marcaModel -> where('eliminar', false) -> get();
            $categorias = $categoriaModel -> where('eliminar', false) -> get();

            $html = view('pages.productos.lista', compact('productos', 'unidades', 'marcas', 'categorias'))->render();
            
            return response()->json(['html' => $html]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, CategoriaModel $categoriaModel,
                            MarcaModel $marcaModel, UnidadModel $unidadModel){

        if($request->ajax()){

            $unidades = $unidadModel -> where('eliminar', false) -> get();
            $marcas = $marcaModel -> where('eliminar', false) -> get();
            $categorias = $categoriaModel -> where('eliminar', false) -> get();

            $html = view('pages.productos.form', compact('unidades', 'marcas', 'categorias'))->render();  
            
            return response()->json(['html'=>$html]); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoModel $productoModel){

        $productoModel -> create([
                'descripcion' => request('nombre'),
                'fkCategoria' => request('categoria'),
                'fkMarca' => request('marca'),
                'fkUnidad' => request('unidad'),
                'pVenta' => request('venta'),
                'pCompra' => request('compra'),
                'eliminar' => false
        ]);

        return redirect()->route('init.productos')->with('alert', 'true');
    }

    public function update(Request $request, ProductoModel $productoModel,
                            UnidadModel $unidadModel, MarcaModel $marcaModel,
                            CategoriaModel $categoriaModel){

        if($request->ajax()){

            $producto = $productoModel->find(request('id'));
            $producto -> update([
                'descripcion' => request('desc'),
                'fkCategoria' => request('categ'),
                'fkMarca' => request('marc'),
                'fkUnidad' => request('unid'),
                'pVenta' => request('pVenta'),
                'pCompra' => request('pCompra'),
                'eliminar' => false    
            ]);

            $productos = $this -> getProductos();

            $unidades = $unidadModel -> where('eliminar', false) -> get();
            $marcas = $marcaModel -> where('eliminar', false) -> get();
            $categorias = $categoriaModel -> where('eliminar', false) -> get();

            $html = view('pages.productos.lista', compact('productos', 'unidades', 'marcas', 'categorias'))->render();
            
            return response()->json(['html' => $html]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductoModel $productoModel,
                            UnidadModel $unidadModel, MarcaModel $marcaModel,
                            CategoriaModel $categoriaModel){

        if($request->ajax()){

            $producto = $productoModel->find(request('id'));
            $producto -> update([
                'eliminar' => true    
            ]);

            $productos = $this -> getProductos();

            $unidades = $unidadModel -> where('eliminar', false) -> get();
            $marcas = $marcaModel -> where('eliminar', false) -> get();
            $categorias = $categoriaModel -> where('eliminar', false) -> get();

            $html = view('pages.productos.lista', compact('productos', 'unidades', 'marcas', 'categorias'))->render();
            
            return response()->json(['html' => $html]); 
        }
    }

    private function getProductos(){
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
                -> get();

    }
}
