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
                <h3>Id: {{$departamento->id}}</h3>
            </li>
            <li>
                <h3>Nombre: {{$departamento->nombre}}</h3>
            </li>
            <li>
                <h3>Descripcion: {{$departamento->descripcion}}</h3>
            </li>
        </ul>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('departamento/'.$departamento->id.'/edit')}}">Editar</a></div>
        <div class="text-center">
            <form action="{{url('departamento/'.$departamento->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-outline-dark mt-auto">Eliminar</button>
            </form>
        </div>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('producto/')}}">Regresar</a></div>
        
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($departamento->productos as $producto)
                    <x-contenedor_producto :producto='$producto'/>
                @endforeach        
            </div>
        </div>

        {{-- <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($departamento->users as $user)
                    {{$user->name}}
                    <x-contenedor_empleado :user='$user'/>
                @endforeach        
            </div>
        </div> --}}
        
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('departamento/')}}">Regresar</a></div>
</body>
</html>