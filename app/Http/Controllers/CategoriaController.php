<?php

namespace App\Http\Controllers;
use App\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias= categoria::paginate(10);
        return view('admin.categorias.index')-> with(compact('categorias'));
    }
    public function create(){
        return view('admin.categorias.create');
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $categoria=new categoria();
        $categoria -> categorias= $request->input('categoria');
        $categoria -> save();//insert
        return redirect() -> route( 'categoria.index');
    }
    public function edit($id){
        $categoria=categoria::find($id);
        return view('admin.categorias.edit')-> with(compact('categoria') );//pasa la var
    }
    public function update(Request $request,$id){
        $categoria=categoria::find($id);
        $categoria -> categorias= $request->input('categoria');
        $categoria -> save();//insert
        return redirect() -> route( 'categoria.index');
    }
    public function destroy($id){
        $categoria=categoria::find($id);
        $categoria -> delete();//elimina
        return redirect() -> route( 'categoria.index');
        //return back();
    }
}
