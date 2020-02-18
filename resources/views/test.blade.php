<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Productos</title>
</head>
<body>
    <ul>
        @foreach ($productos as $producto)

        <li>id: {{$producto->id}}</li>
        <li>nombre: {{$producto->name}}</li>
        <li>precio: ${{$producto->precio}}</li>
        <li>descripción: {{$producto->descripcion}}</li>
        <li>valoración: {{$producto->valoracion}}</li>
        <br>
        @empty($productos)
            <li>No hay Productos</li>
        @endempty

        @endforeach

        
        
    </ul>

    {{$productos->links()}}
</body>
</html>