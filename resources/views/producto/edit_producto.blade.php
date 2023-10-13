<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <x-nav_bar/>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('producto.update',$producto)}}" method="POST">
        @method("PATCH")
        @csrf
        
        <div class="">
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
                <div class="col-sm-10">
                    <input type="text" name='nombre' id='nombre' value="{{$producto->nombre}}"><br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Existencia: </label>
                <div class="col-sm-10">
                    <input type="number" name="existencia" id='existencia' value="{{$producto->existencia}}"><br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Precio: </label>
                <div class="col-sm-10">
                    <input type="number" name="precio" id="precio" value="{{$producto->precio}}"><br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Descripcion: </label>
                <div class="col-sm-10">
                    <input type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}"><br>
                </div>
            </div>
    
            <input type="submit" class="btn btn-outline-dark mt-auto" value="Submit"><br><br>
            <div><a class="btn btn-outline-dark mt-auto" href="{{url('producto/')}}">Regresar</a></div>
        </div>
    </form>

</body>
</html>