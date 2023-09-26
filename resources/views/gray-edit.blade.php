<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola Editor</h1>

    <form action="{{route('gray.update', $gray)}}" method="post">
        @csrf
        @method('PATCH')
        
        <label for="email">correo</label><br>
        <input type="email" name="email" value={{$gray->email}}><br>
        <label for="password">contraseña</label><br>
        <input type="text" name ="password" value={{$gray->password}}><br><br>
        <input type="submit">
    </form>
</body>
</html>