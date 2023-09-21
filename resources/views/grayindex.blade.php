<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Humano</h1>
    <h1>Lista de normas</h1>
    @foreach ( $grays as $gray )
        <li>
            <a href="{{route('gray.show', $gray->id)}}">
                {{ $gray->email}}
            </a>
        </li>
    @endforeach
</body>
</html>