<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar correo  con laravel</title>
</head>
<body>

@if (session('success'))
<li>{{session('success')}}</li>

@endif

    <form action="{{ route('enviar-correo') }}" method="POST">
        @csrf 
        <label for="">Destinatario</label>
        <input type="email" name="destinatario" required>
        <label for="Mensaje"></label>
        <textarea name="mensaje" rows="3"></textarea>
        <button type="submit">enviar CORREO</button>
    </form>
</body>
</html>