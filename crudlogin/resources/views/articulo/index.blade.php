@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Bienvenido...</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-secondary">CREAR</a>
<br>
<br>

<table id="articulo" class="table table-striped table-bordered table shadow-lg "  style="width:100% ">
    <thead class=" bg-secondary text-white">

        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>    

<tbody>
    @foreach ($articulos as $articulo)

        <tr>
            <td>{{ $articulo->id }}</td>
            <td>{{ $articulo->codigo }}</td>
            <td>{{ $articulo->descripcion }}</td>
            <td>{{ $articulo->cantidad }}</td>
            <td>{{ $articulo->precio }}</td>
            
            
           
            <td>
            <script src="https://kit.fontawesome.com/299c029cd5.js" crossorigin="anonymous"></script>
            <form action=" {{route('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</button>
                </form>
            </td>
        
        </tr>

    @endforeach

</tbody>

</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="styleshet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#articulo').DataTable();
});
</script>
@stop