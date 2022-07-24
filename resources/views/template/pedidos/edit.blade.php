@extends('Template.Template')
@section('plantillaweb')
<h2>Editar Registro Pedidos. {{$pedido->id}}</h2>
<form action="{{route('Pedidos.update', $pedido)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}
    <div class="container">
      <div class="d-grid gap-2">
     
        
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Fecha: </label>
            <input type="text" name="Fecha" value="{{$pedido->Fecha}}">
          </div>
          
          <div class="mb-3">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Cliente: </label>
            <input type="" name="Cliente" value="{{$pedido->Cliente}}">
          </div>
          
          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Número Artículos: </label>
            <input type="text" name="Numero_articulos" value="{{$pedido->Numero_articulos}}">
          </div>

          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Código Artículo: </label>
            <input type="" name="Codigo_articulo" value="{{$pedido->Codigo_articulo}}">
          </div>
 
          <div class="row">
          <div class="col-lg-6 col -md-4 col-sm-2">
            <label for="">Sub Total: </label>
            <input type="number" name="Sub_total" value="{{$pedido->Sub_total}}">
          </div>

          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">IVA: </label>
            <input type="text" name="Iva" value="{{$pedido->Iva}}">
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-2">
              <label for="">Valor Total: </label>
              <input type="" name="Valor_Total" value="{{$pedido->Valor_Total}}">
            </div>
  
          
        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection