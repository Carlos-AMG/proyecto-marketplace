<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <input type="text" name='nombre' id='nombre'><br>
        <label for="correo">Correo: </label>
        <input type="email" name="correo" id='correo'>
        <input type="submit" value="Submit">
    </form>

</body>
</html>