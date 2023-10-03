<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>
<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('producto.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" name='nombre' id='nombre'><br><br>
        
        <label for="existencia">Existencia: </label>
        <input type="number" name="existencia" id='existencia'><br><br>
        
        <label for="precio">Precio: </label>
        <input type="number" name="precio" id="precio"><br><br>

        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion" id="descripcion"><br><br>

        <input type="submit" value="Submit"><br><br>
    </form>

</body>
</html>