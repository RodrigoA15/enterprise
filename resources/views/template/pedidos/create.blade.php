@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de Pedidos</h2>
<form action="{{route('Pedidos.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Fecha: </label><br>
            <input type="text" name="Fecha"><br><br>
          </div>

          
          <div class="col-lg-6 col-md-4 col-sm-2">
           <select class="form-control" name="cliente_id" id="cliente_id">
            <option value="">Cliente</option>
            @foreach ($clientes as $cliente)
            <option value="{{$cliente->id}}">{{$cliente->id}}</option>
            @endforeach
           </select>
          </div>
          
          

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Número Artículos: </label><br>
            <input type="text" name="Numero_articulos"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
          <select class="form-control" name="producto_id" id="producto_id">
            <option value="">Codigo Producto</option>
            @foreach ($productos as $producto)
                <option value="{{$producto->id}}">{{$producto->id}}</option>
            @endforeach
          </select>
          </div> 

          <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-control" name="Nombre_articulos" id="Nombre_articulos">
              <option value="">Nombre Articulos</option>
              @foreach ($productos as $producto)
                  <option value="{{$producto->id}}">{{$producto->Nombre}}</option>
              @endforeach
            </select>
            </div> 

        

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Sub Total: </label><br>
            <input type="number" name="Sub_total"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">IVA: </label><br>
            <input type="number" name="Iva"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Valor Total: </label><br>
            <input type="number" name="Valor_Total"><br><br>
          </div>

          <button type="submit" class ="btn btn-primary">Registrar</button>


</form>
@endsection