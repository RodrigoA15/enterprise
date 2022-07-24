<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=productos::simplePaginate(20);
        return view('template.productos.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos=new productos;
        $productos->Nombre =$request->Nombre;
        $productos->Descripcion =$request->Descripcion;
        $productos->Existencia =$request->Existencia;
        $productos->Valor_unitario =$request->Valor_unitario;
        $productos->Unidad_medida =$request->Unidad_medida;
        $productos->Fecha_vencimiento =$request->Fecha_vencimiento;
        $productos->save();
        return redirect()->route('Productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $productos,$id)
    {
        $producto = productos::find($id);
        return view('template.productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos,$id)
    {
        $productos = productos::find($id);
        $productos->Nombre =$request->Nombre;
        $productos->Descripcion =$request->Descripcion;
        $productos->Existencia =$request->Existencia;
        $productos->Valor_unitario =$request->Valor_unitario;
        $productos->Unidad_medida =$request->Unidad_medida;
        $productos->Fecha_vencimiento =$request->Fecha_vencimiento;
        $productos->save();
        return redirect()->route('Productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $productos,$id)
    {
        $productos = productos::find($id);
        $productos->delete();
        return redirect()->route('Productos.index');
    }
}
