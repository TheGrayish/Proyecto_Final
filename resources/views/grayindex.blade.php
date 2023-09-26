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
            <a href="{{route('gray.edit', $gray->id)}}">
             Editar
            </a>
            |
            <form action="{{route('gray.destroy', $gray)}}" method="POST">
               @csrf
               @method('DELETE')
                <input type="submit" value="Borrar">
            </form>
           
        </li>
    @endforeach
</body>
</html>