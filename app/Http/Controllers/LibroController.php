<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function index(){
        $libros = Libro::orderBy('id', 'desc')->get();
        return view('libro.listar', ['libros' => $libros]);
    }
    public function edit(Libro $libro){
        return view('libro.edit', compact('libro'));
    }
    public function update(Request $request, Libro $libro){
        $libro->titulo=$request->titulo;
        $libro->ISBN=$request->ISBN;
        $libro->editorial=$request-> editorial;
        $libro->paginas=$request-> paginas;
        
       
        $libro->save();
     
        return redirect()->route('libro.index');
     
      }    

      public function destroy (Libro $libro){
           
        $libro->delete();
        return redirect()->route('libro.index');
    }

    public function show(Libro $libro){


        return view('libro.show',compact('libro'));




    }
     public function create(){
        return view('create');
    }


    public function store(Request $request){
       
        $libro= new Libro();
        $libro->titulo=$request->titulo;
        $libro->ISBN=$request->ISBN;
        $libro->editorial=$request-> editorial;
        $libro->paginas=$request-> paginas;
        
        $libro->save();
   


    }
}
