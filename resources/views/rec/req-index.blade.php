<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Gray</th>
            <th>Identicador</th>
        </tr>
        <thead>
            <tbody>
                @foreach ($reqs as $req)
                    <tr>
                        <td> {{$req->gray->email}}</td>
                        <td>{{$req->identificador}}</td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>