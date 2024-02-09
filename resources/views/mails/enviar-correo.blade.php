<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo enviado desde Formulario de contacto de NEXUS IT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .info {
            margin-top: 20px;
            text-align: left;
            width: 300px; /* Ajusta el ancho según tus necesidades */
            margin: 0 auto; /* Centra horizontalmente */
        }
        .info h1 {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Correo enviado desde Formulario de contacto de NEXUS IT</h1>
        <div class="info">
            <h1>Nombre: {{ $name }}</h1>
            <h1>Apellido: {{ $lastName }}</h1>
            <h1>Empresa: {{ $company }}</h1>
            <h1>Correo: {{ $email }}</h1>
        </div>
    </div>
</body>
</html>
