@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de Clientes</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Tipo de documento</th>
        <th scope="col">Numero de documento</th>
        <th scope="col">Direccion</th>
        <th scope="col">Celular</th>
        <th scope="col">Corro académico</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->Nombres}}</td>
            <td>{{$cliente->Tipo_documento}}</td>
            <td>{{$cliente->Numero_doc}}</td>
            <td>{{$cliente->Direccion}}</td>
            <td>{{$cliente->Celular}}</td>
            <td>{{$cliente->Correo}}</td>
            <td>
              <a href="{{route('Clientess.edit', $cliente->id)}}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>
            </td>
            <td>
              <form action="{{route('Clientess.destroy', $cliente->id)}}" method="POST">
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
  {{$clients->links()}}
@endsection 