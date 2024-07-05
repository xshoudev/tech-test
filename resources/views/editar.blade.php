<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <form action="{{ url('productos/' . $producto->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre del producto</label><br>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{ $producto->nombre }}"><br>
        <label for="description">Descripcion</label><br>
        <input type="text" name="description" id="description" placeholder="Descripcion" value="{{ $producto->description }}"><br>
        <label for="precio">Precio</label><br>
        <input type="number" name="precio" id="precio" placeholder="Precio" value="{{ $producto->precio }}"><br>
        <label for="cantidad">Cantidad</label><br>
        <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" value="{{ $producto->cantidad }}"><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="/productos">Regresar al listado</a>
</body>
</html>
