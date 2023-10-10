<!DOCTYPE html>
<html lang="en">
<head>
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro</title>
        <!-- Agrega enlaces a las hojas de estilo CSS que deseas usar -->
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/tooplate-style.css">
    </head>
    <body>
        <!-- Encabezado -->
        <header class="mb-4"><h2 class="tm-text-shadow">Registro</h2></header>
        
        <!-- Contenido del formulario -->
        <section id="tm-section-4" class="tm-section">
            <form action="{{route('gray.store')}}" method="post" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="email">Correo</label><br>
                    <input type="email" id="email" name="email" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label><br>
                    <input type="text" id="password" name="password" class="form-control" required="">
                </div>
                <br><button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Enviar</button>
            </form>
        </section>
    
        <!-- JavaScript y otros elementos -->
    
    </body>
    </html>
    
</html>