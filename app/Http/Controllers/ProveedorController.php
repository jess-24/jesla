<?php

namespace App\Http\Controllers;

use App\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //metodo de leer proveedores
    public function index(){
        $proveedor= proveedor::all();
        return view('admin.proveedor.index')-> with(compact('proveedor'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['nombre'=>'required', 'direccion'=>'required']);
        proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success','Registro creado satisfactoriamente');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artista = Artista::find($id);
        return view('admin.Artista.edit',compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,['nombre'=>'required', 'origen'=>'required', 'inicio'=>'required']);

        Artista::find($id)->update($request->all());
        return redirect()->route('artista.index')->with('success','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Artista::find($id)->delete();
        return redirect()->route('artista.index')->with('success','Registro eliminado satisfactoriamente');
    }

}
