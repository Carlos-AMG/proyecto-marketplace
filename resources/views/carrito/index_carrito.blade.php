<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <x-nav_bar/>
    @foreach ($cartItems as $item)
        <h1>{{$item->producto->nombre}}</h1>
        {{$item->quantity}}
    @endforeach
    <form action="{{route('pay')}}" method="GET">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>