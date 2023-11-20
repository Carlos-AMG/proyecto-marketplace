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
                <h3>Id: {{$factura->id}}</h3>
            </li>
            <h3>Productos: </h3>
            @foreach ($factura->productos as $producto)
                <li>
                    <h3>{{$producto->nombre}}</h3>
                </li>    
            @endforeach
            

        </ul>
        
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('empleado/')}}">Regresar</a></div>
</body>
</html>