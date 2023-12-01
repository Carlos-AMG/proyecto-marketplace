<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>
<body>
        <x-nav_bar/>
        <ul>
            <li>
                <img src="{{asset($empleado->profile_photo_path)}}" alt="">                
            </li>
            <li>
                <h3>Id: {{$empleado->id}}</h3>
            </li>
            <li>
                <h3>RFC: {{$empleado->rfc}}</h3>
            </li>
            <li>
                <h3>Nombre: {{$empleado->name}}</h3>
            </li>
            <li>
                <h3>Correo: {{$empleado->email}}</h3>
            </li>
            <li>
                <h3>Departamento: {{$empleado->departamento->nombre}}</h3>
            </li>
        </ul>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('empleado/'.$empleado->id.'/edit')}}">Editar</a></div>
        <div class="text-center">
            <form action="{{url('empleado/'.$empleado->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-outline-dark mt-auto">Eliminar</button>
            </form>
        </div>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('empleado/')}}">Regresar</a></div>
</body>
</html>