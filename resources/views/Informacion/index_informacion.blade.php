<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <x-nav_bar/>  
    <div class="container mt-5">
        <h1>Bienvenido!</h1>    

    </div>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido!</h1>
            <p class="lead">Te damos la bienvenida a nuestro sitio web de ventas</p>
        </div>
        
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    Aquí podrás encontrar cualquier producto que busques, 
                    solamente regístrate aquí para poder comprar y
                    ver todos nuestros productos disponibles.
                </p>
                <form action="{{ path('dashboard') }}" method="get">
                    <button type="submit" class="btn btn-primary">Comenzar a comprar!!</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
