@extends('Template.Template')
@section('plantillaweb')
<h2>Editar Registro 8. {{$cliente->id}}</h2>
<form action="{{route('Clientess.update', $cliente)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}
    <div class="container">
      <div class="d-grid gap-2">
     
        
          
            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Nombres: </label>
            <input type="text" name="Nombres" value="{{$cliente->Nombres}}">
          </div>
          
          <div class="mb-3">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Tipo de documento: </label>
            <input type="text" name="Tipo_documento" value="{{$cliente->Tipo_documento}}">
          </div>
          
          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Número de documento: </label>
            <input type="number" name="Numero_doc" value="{{$cliente->Numero_doc}}">
          </div>

          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Dirección: </label>
            <input type="text" name="Direccion" value="{{$cliente->Direccion}}">
          </div>
 
          <div class="row">
          <div class="col-lg-6 col -md-4 col-sm-2">
            <label for="">Celular: </label>
            <input type="number" name="Celular" value="{{$cliente->Celular}}">
          </div>

          <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Correo: </label>
            <input type="text" name="Correo" value="{{$cliente->Correo}}">
          </div>

          
        </div>
      </div>
    <input type="submit" name="btn_enviar" value="Aceptar">
</form>
@endsection