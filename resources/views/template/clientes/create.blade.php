@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de clientes</h2>
<form action="{{route('Clientess.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombre: </label><br>
            <input type="text" name="Nombres"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">tipo de documento: </label><br>
            <input type="text" name="Tipo_documento"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">numero de documento: </label><br>
            <input type="text" name="Numero_doc"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">direccion: </label><br>
            <input type="text" name="Direccion"><br><br>
          </div> 

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">celular: </label><br>
            <input type="" name="Celular"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">correo: </label><br>
            <input type="" name="Correo"><br><br>
          </div>

          <button type="submit" class ="btn btn-primary">Registrar</button>


</form>
@endsection