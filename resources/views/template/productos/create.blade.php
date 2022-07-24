@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de productos</h2>
<form action="{{route('Productos.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombre: </label><br>
            <input type="text" name="Nombre"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Descripcion: </label><br>
            <input type="text" name="Descripcion"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Existencia: </label><br>
            <input type="text" name="Existencia"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Valor_unitario: </label><br>
            <input type="text" name="Valor_unitario"><br><br>
          </div> 

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Unidad medida: </label><br>
            <input type="text" name="Unidad_medida"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Fecha vencimiento: </label><br>
            <input type="text" name="Fecha_vencimiento"><br><br>
          </div>

          <button type="submit" class ="btn btn-primary">Registrar</button>


</form>
@endsection