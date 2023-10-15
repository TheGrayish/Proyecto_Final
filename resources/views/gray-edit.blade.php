<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Editar contacto</title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">
    <style>
        body {
            background-color: #ffffff; /* Blanco */
            font-family: Arial, sans-serif;
            text-align: center;
        }

        header {
            background-color: #0073e6; /* Azul */
            color: #ffffff; /* Blanco */
            padding: 20px;
        }

        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #0073e6; /* Azul */
            border-radius: 10px;
            background-color: #f0f0f0; /* Gris claro */
        }

        .form-group {
            margin: 10px 0;
        }

        label {
            color: #0073e6; /* Azul */
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #0073e6; /* Azul */
            border-radius: 5px;
        }

        .btn {
            background-color: #0073e6; /* Azul */
            color: #ffffff; /* Blanco */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h2 class="tm-text-shadow">Editar contacto</h2>
    </header>

    <div class="form-container">
        <form action="{{ route('gray.update', $gray) }}" method="post" class="contact-form">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="email">Correo</label><br>
                <input type="email" id="email" name="email" class="form-control" required value="{{$gray->email}}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label><br>
                <input type="text" id="password" name="password" class="form-control" required value="{{$gray->password}}">
            </div>
            <!-- Puedes agregar más campos aquí de forma recursiva -->
            <button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Enviar</button>
        </form>
    </div>
</body>
</html>
