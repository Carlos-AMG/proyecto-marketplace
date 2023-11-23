<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{url('public\startbootstrap-shop-homepage-gh-pages\assets\favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{url('public\startbootstrap-shop-homepage-gh-pages\css\styles.css')}}" rel="stylesheet" /> --}}
    <title>Facturas</title>
</head>
<body>
    <x-nav_bar/>  
    
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <ul>
            @foreach ($facturas as $factura)
            <li>
                <h1>{{$factura->fecha}}</h1>
            </li>
                    @foreach ($factura->productos as $producto)
                        <li>
                            <h2>{{$producto->nombre}} {{$producto->pivot->cantidad}}</h2>
                        </li>
                    @endforeach
            @endforeach
            </ul>
        </div>
    </div>
    
</body>
</html>