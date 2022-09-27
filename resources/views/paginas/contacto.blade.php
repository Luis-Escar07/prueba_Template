<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/contacto.css">
        <title>Contacto</title>
    </head>
    <body>
        <h1>Contact Me</h1>

        <form action="recibe-form-contacto" method="POST">
            @csrf

            <label for="nombre">
                Nombre:
                <br>
                <input type="text" name="nombre" value="{{ old('nombre') ?? $nombre }}" placeholder="Escribe tu nombre">

                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="email">
                Correo:
                <br>
                <input type="text" name="email" placeholder="Escribe tu email" value="{{ old('email') ?? $email }}">

                @error('email')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <br>

            <label for="mensaje">
                Comentarios extra:
                <br>
                <textarea name="mensaje" placeholder="Deja un comentario extra" cols="30" rows="10">{{ old('comen') }}"</textarea>

                @error('comen')
                    <i>{{ $message }}</i>
                @enderror
            </label>

            <label for="Enviar">
                <br>
                <input type="submit" value="Enviar">
            </label>
        </form>
    </body>
</html>