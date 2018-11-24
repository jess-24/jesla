<?php

namespace App\Http\Controllers;
use App\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        //::all();  -> traerá todos los productos
        $categorias= producto::paginate(10);//mostrar productos de 10 en 10
        return view('admin.categorias.index')-> with(compact('categorias'));
    }
    public function create(){
        return view('admin.categorias.create');
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $categoria=new categoria();
        $categoria -> categoria= $request->input('categoria');
        $categoria -> save();//insert
        return redirect() -> route( 'categoria.index');
    }
    public function edit($id){
        $categoria=categoria::find($id);
        return view('admin.categorias.edit')-> with(compact('categoria') );//pasa la var
    }
    public function update(Request $request,$id){
        $categoria=categoria::find($id);
        $categoria -> categoria= $request->input('categoria');
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
