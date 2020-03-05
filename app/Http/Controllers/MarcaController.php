<?php

namespace App\Http\Controllers;

use App\MarcaModel;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, MarcaModel $marcaModel){
        
        if($request->ajax()){
            $marcas = $marcaModel -> where('eliminar', false) -> get();
            $html = view('pages.marcas.lista', compact('marcas'))->render();
            
            return response()->json(['html' => $html]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        if($request->ajax()){
            $html = view('pages.marcas.form')->render();  
            
            return response()->json(['html'=>$html]); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaModel $marca){
        
        $marca -> create([
            'descripcion' => request('nombre'),
            'abreviatura' => request('abrev'),
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
    public function update(Request $request, MarcaModel $marcaModel){
        
        if($request->ajax()){

            $marca = $marcaModel->find(request('id'));
            $marca -> update([
                'descripcion' => request('nombre'),
                'abreviatura' => request('abrev'),
                'eliminar' => false    
            ]);

            $marcas = $marcaModel -> where('eliminar', false) -> get();

            $html = view('pages.marcas.lista', compact('marcas'))->render();  
            
            return response()->json(['html'=>$html]); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MarcaModel $marcaModel){

        if($request->ajax()){

            $marca = $marcaModel->find(request('id'));
            $marca -> update([
                'eliminar' => true    
            ]);

            $marcas = $marcaModel -> where('eliminar', false) -> get();

            $html = view('pages.marcas.lista', compact('marcas'))->render();  
            
            return response()->json(['html'=>$html]); 
        } 
    }
}
