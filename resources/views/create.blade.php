<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/productos" method="post">
        @csrf
        <label for="">Nombre del producto</label><br>
        <input type="text" name="nombre" id="" placeholder="Nombre" required><br>
        <label for="">Descripcion</label><br>
        <input type="text" name="description" id="" placeholder="Descripcion" required><br>
        <label for="">Precio</label><br>
        <input type="number" name="precio" id="" placeholder="Precio" required><br>
        <label for="">Cantidad</label><br>
        <input type="number" name="cantidad" id="" placeholder="Cantidad" required><br>
        <button type="submit">Agregar</button>
    </form>

    <a href="/productos">Regresar al listado</a>
</body>
</html>