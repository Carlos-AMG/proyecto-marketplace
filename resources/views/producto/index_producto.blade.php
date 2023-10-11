<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-nav_bar/>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Existencia</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <td></td>
            <td></td>
        </tr>
    </thead>

    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <x-contenedor_producto producto='$producto' />

                {{-- <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->existencia}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->descripcion}}</td>
                <td><a href="{{url('producto/'.$producto->id.'/edit')}}">Editar</a></td>
                <td>
                    <form action="{{url('producto/'.$producto->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        
                        <button type="submit">Eliminar</button>
                    </form>
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</body>
</html>