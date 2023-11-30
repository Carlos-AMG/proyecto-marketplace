<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Factura</h1>
    <p>Precio Total: ${{ number_format($precio, 2) }}</p>
    <p>Fecha: {{ $fecha }}</p>

    <h2>Productos:</h2>
    <ul>
        @foreach($cartItems as $item)
            <li>{{ $item->producto->nombre }} - Cantidad: {{ $item->quantity }} - Precio Unitario: ${{ number_format($item->producto->precio, 2) }}</li>
        @endforeach
    </ul>

    
</body>
</html>
