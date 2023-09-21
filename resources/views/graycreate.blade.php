<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola Creador</h1>

    <form action="{{route('gray.store')}}" method="post">
        @csrf
        <label for="email">correo</label><br>
        <input type="email" name="email"><br>
        <label for="password">contraseña</label><br>
        <input type="text" name ="password"><br><br>
        <input type="submit">
    </form>
</body>
</html>