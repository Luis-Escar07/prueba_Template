<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/contacto.css">
        <title>Contacto</title>
    </head>
    <body>
        <h1>Contact Me</h1>

        <form action="contacto.blade.php" method="POST">
            <label for="nombre">
                Nombre:
                <br>
                <input type="text" name="nombre" value="{{ $nombre }}" placeholder="Escribe tu nombre">
            </label>

            <br>

            <label for="email">
                Correo:
                <br>
                <input type="email" name="email" value="{{ $email }}" placeholder="Escribe tu email">
            </label>

            <br>

            <label for="comen">
                Comentarios extra:
                <br>
                <textarea name="comen" placeholder="Deja un comentario extra" cols="30" rows="10"></textarea>
            </label>
        </form>
    </body>
</html>