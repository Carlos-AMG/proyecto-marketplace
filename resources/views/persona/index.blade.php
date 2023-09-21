<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Index</h1>
    <ul>
        @foreach ($personas as $persona)
            <h1>{{ $persona->correo }}</h1>
        @endforeach
</body>
</html>
