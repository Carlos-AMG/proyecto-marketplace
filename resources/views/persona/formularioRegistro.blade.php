<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
<h1>Registro de Cuenta</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{route('persona.store')}}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" ><br><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" ><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" ><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" ><br><br>

    <input type="submit" value="Registrar Cuenta">
</form>
</body>
</html>