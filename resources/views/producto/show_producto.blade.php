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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <ul>
            
            @if(Auth::check())
                @if (auth()->user()->role != 'user')
                <li>
                    <h3>Id: {{$producto->id}}</h3>
                </li>
                @endif
                
            @endif
                
            
            <li>
                <h3>Nombre: {{$producto->nombre}}</h3>
            </li>
            <li>
                <h3>Precio: {{$producto->precio}}</h3>
            </li>
            <li>
                <h3>Existencias: {{$producto->existencia}}</h3>
            </li>
            <li>
                <h3>Descripcion: {{$producto->descripcion}}</h3>
            </li>
            <li>
                <h3>Departamento: {{$producto->departamento->nombre}}</h3>
            </li>
        </ul>
        @if(Auth::check())
            @if (auth()->user()->role != 'user')
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('producto/'.$producto->id.'/edit')}}">Editar</a></div>
                <div class="text-center">
                    <form action="{{url('producto/'.$producto->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-outline-dark mt-auto">Eliminar</button>
                    </form>
                </div>
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href= "{{url('producto/')}}">Regresar</a></div>
            @else
                <div class="text-center">
                    <form method="post" action="{{ route('cart.addToCart', ['product' => $producto->id]) }}">
                        @csrf
                        <input type="number" id="cantidad" name="cantidad"/>
                        <button type="submit" class="btn btn-outline-dark mt-auto">Añadir al Carrito</button>
                    </form>
                </div>
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href= "{{url('dashboard/')}}">Regresar</a></div>
            @endif

        @endif
        
</body>
</html>