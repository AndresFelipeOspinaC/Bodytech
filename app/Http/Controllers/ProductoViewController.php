<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoViewController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('Producto.index', compact('productos'));
    }

    public function create()
    {
        return view('Producto.create');
    }


    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();
        return redirect()->route('productosView.index');
    }

    public function show($id)
    {
        $producto = Producto::Where('id',$id)->first();
        return view('Producto.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::Where('id',$id)->first();
        return view('Producto.edit', compact('producto'));
    }
    public function update(Request $request, $id)
    {
        $producto2=$request->except(['_token','_method']);
        $producto = Producto::find($id)->update($producto2);
        return redirect()->route('productosView.index');
    }


    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();
        return redirect()->route('productosView.index');
    }


    public function catalogo(){
        return view('catalogo.index');
    }


}
