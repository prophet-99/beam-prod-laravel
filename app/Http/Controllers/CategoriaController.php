<?php

namespace App\Http\Controllers;

use App\CategoriaModel;
use App\Exports\CategoriaExport;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, CategoriaModel $categoriaModel){

        if($request->ajax()){
            $categorias = $categoriaModel -> where('eliminar', false) -> get();
            $html = view('pages.categorias.lista', compact('categorias'))->render();
            
            return response()->json(['html' => $html]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->ajax()){
            $html = view('pages.categorias.form')->render();  
            
            return response()->json(['html'=>$html]); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaModel $categoriaModel){

        $categoriaModel -> create([
                    'descripcion' => request('nombre'),
                    'abreviatura' => request('abrev'),
                    'orden' => request('orden'),
                    'eliminar' => false
        ]);

        return redirect()->route('init.productos')->with('alert', 'true');      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaModel $categoriaModel){

        if($request->ajax()){

            $categoria = $categoriaModel->find(request('id'));
            $categoria -> update([
                    'descripcion' => request('nombre'),
                    'abreviatura' => request('abrev'),
                    'orden' => request('orden'),
                    'eliminar' => false    
            ]);

            $categorias = $categoriaModel -> where('eliminar', false) -> get();

            $html = view('pages.categorias.lista', compact('categorias'))->render();  
            
            return response()->json(['html'=>$html]); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CategoriaModel $categoriaModel){

        if($request->ajax()){

            $categoria = $categoriaModel->find(request('id'));
            $categoria -> update([
                'eliminar' => true    
            ]);

            $categorias = $categoriaModel -> where('eliminar', false) -> get();

            $html = view('pages.categorias.lista', compact('categorias'))->render();  
            
            return response()->json(['html'=>$html]); 
        }
    }

    public function pdf(CategoriaExport $categoriaExport){

        return $categoriaExport -> download('categorias.pdf');
    }

    public function excel(CategoriaExport $categoriaExport){

        return $categoriaExport -> download('categorias.xlsx');
    }
}
