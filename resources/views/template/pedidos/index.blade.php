@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de Pedidos</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Fecha</th>
        <th scope="col">Numero Artículos</th>
        <th scope="col">Codigo Artículos</th>
        <th scope="col">Nombre Artículos</th>
        <th scope="col">Sub Total</th>
        <th scope="col">IVA</th>
        <th scope="col">Valor Total</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $pedido)
        <tr>
            <th scope="row">{{$pedido->id}}</th>
            <td>{{$pedido->Fecha}}</td>
            <td>{{$pedido->Numero_articulos}}</td>
            <td>{{$pedido->producto_id}}</td>
            <td>{{$pedido->Nombre_articulos}}</td>
            <td>{{$pedido->Sub_total}}</td>
            <td>{{$pedido->Iva}}</td>
            <td>{{$pedido->Valor_Total}}</td>

            <td>
              <a href="{{route('Pedidos.edit', $pedido->id)}}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>
            </td>
            <td>
              <form action="{{route('Pedidos.destroy', $pedido->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>  
              </form>
            </td>  
            </td>
        </tr>      
        @endforeach
    </tbody>
  </table>
  {{$orders->links()}}
@endsection 