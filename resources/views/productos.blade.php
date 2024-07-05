<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="productos/create">Crear un producto</a>
@if($productos->count())
<table border="1">
<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Editar</th>
        <th>eliminar</th>
    </tr>
</thead>
<tbody>
    @foreach($productos as $items)
    <tr>
    <td>{{ $items->id}}</td>
    <td>{{ $items->nombre}}</td>
    <td>{{ $items->description}}</td>
    <td>{{ $items->precio}}</td>
    <td>{{ $items->cantidad}}</td>
    <td><a href="{{ url('productos/'. $items->id.'/edit') }}">Editar</a></td>
    <td>
        <form action="{{ url('productos/'. $items->id) }}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit">Borrar</button>
        </form>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
@else
    <p>No se encontraron datos.</p>
@endif
</body>
</html>