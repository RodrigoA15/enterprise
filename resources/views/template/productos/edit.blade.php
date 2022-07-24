@extends('Template.Template')
@section('plantillaweb')
<h2>Editar Registro. {{$producto->id}}</h2>
<form action="{{route('Productos.update', $producto)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}
    <div class="container">
      <div class="d-grid gap-2">
     
        
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" name="Nombre" value="{{$producto->Nombre}}">
          </div>
          
          <div class="mb-3">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Descripción: </label>
            <input type="text" name="Descripcion" value="{{$producto->Descripcion}}">
          </div>
          
          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Existencia: </label>
            <input type="number" name="Existencia" value="{{$producto->Existencia}}">
          </div>

          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Valor unitario: </label>
            <input type="text" name="Valor_unitario" value="{{$producto->Valor_unitario}}">
          </div>
 
          <div class="row">
          <div class="col-lg-6 col -md-4 col-sm-2">
            <label for="">Unidad medida: </label>
            <input type="number" name="Unidad_medida" value="{{$producto->Unidad_medida}}">
          </div>

          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Fecha vencimiento: </label>
            <input type="text" name="Fecha_vencimiento" value="{{$producto->Fecha_vencimiento}}">
          </div>

          
        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection