<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=clientes::simplePaginate(20);
        return view('template.clientes.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes=new clientes;
        $clientes->Nombres =$request->Nombres;
        $clientes->Tipo_documento =$request->Tipo_documento;
        $clientes->Numero_doc =$request->Numero_doc;
        $clientes->Direccion =$request->Direccion;
        $clientes->Celular =$request->Celular;
        $clientes->Correo =$request->Correo;
        $clientes->save();
        return redirect()->route('Clientess.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes,$id)
    {
        $cliente = clientes::find($id);
        return view('template.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes,$id)
    {
        $clientes = clientes::find($id);
        $clientes->Nombres =$request->Nombres;
        $clientes->Tipo_documento =$request->Tipo_documento;
        $clientes->Numero_doc =$request->Numero_doc;
        $clientes->Direccion =$request->Direccion;
        $clientes->Celular =$request->Celular;
        $clientes->Correo =$request->Correo;
        $clientes->save();
        return redirect()->route('Clientess.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes,$id)
    {
        $clientes = clientes::find($id);
        $clientes->delete();
        return redirect()->route('Clientess.index');
    }
}
