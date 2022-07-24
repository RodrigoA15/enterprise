@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de Productos</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Existencia</th>
        <th scope="col">Valor unitario</th>
        <th scope="col">Unidad medida</th>
        <th scope="col">Fecha vencimiento</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $producto)
        <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->Existencia}}</td>
            <td>{{$producto->Valor_unitario}}</td>
            <td>{{$producto->Unidad_medida}}</td>
            <td>{{$producto->Fecha_vencimiento}}</td>
            <td>
              <a href="{{route('Productos.edit', $producto->id)}}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>
            </td>
            <td>
              <form action="{{route('Productos.destroy', $producto->id)}}" method="POST">
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
  {{$products->links()}}
@endsection 