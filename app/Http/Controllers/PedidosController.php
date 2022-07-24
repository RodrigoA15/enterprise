<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\pedidos;
use App\Models\productos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=pedidos::simplePaginate(20);
        return view('template.pedidos.index', compact('orders'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=clientes::all();
        $productos = productos::all();
        return view('template.pedidos.create', compact('clientes', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidos=new pedidos;
        $pedidos->Fecha=$request->Fecha;
        $pedidos->cliente_id=$request->cliente_id;
        $pedidos->Numero_articulos =$request->Numero_articulos;
        $pedidos->producto_id =$request->producto_id;
        $pedidos->Nombre_articulos =$request->Nombre_articulos;
        $pedidos->Sub_total =$request->Sub_total;
        $pedidos->Iva =$request->Iva;
        $pedidos->Valor_Total =$request->Valor_Total;
        $pedidos->save();
        return redirect()->route('Pedidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidos $pedidos,$id)
    {
        $pedido = pedidos::find($id);
        return view('template.pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidos $pedidos,$id)
    {
        $pedidos= pedidos::find($id);
        $pedidos->Fecha=$request->Fecha;
        $pedidos->cliente_id =$request->cliente_id;
        $pedidos->Numero_articulos =$request->Numero_articulos;
        $pedidos->producto_id =$request->producto_id;
        $pedidos->Nombre_articulos =$request->Nombre_articulos;
        $pedidos->Sub_total =$request->Sub_total;
        $pedidos->Iva =$request->Iva;
        $pedidos->Valor_Total =$request->Valor_Total;
        $pedidos->save();
        return redirect()->route('Pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedidos $pedidos)
    {
        //
    }
}
