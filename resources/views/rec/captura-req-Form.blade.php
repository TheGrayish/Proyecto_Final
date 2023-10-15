<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('req.store')}}" method="POST">
    @csrf
    <label for="identificador">Identificador</label>
    <input type="text" name="identificador">

    <label for="descripcion">descripcion</label>
    <input type="submit" value="Crer Requerimientos">
    
    <select name="gray_id">
        @foreach ($grays as $gray)
            <option value="{{gray->id}}">
                {{gray->email}}
            
            </option>
        @endforeach

    </select>

    <input type="submit" name="CrearRequerimientos">
    </form>
    
</body>
</html>