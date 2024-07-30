<?php
$logoUrl = 'https://www.example.com/logo.png'; // Reemplaza con la URL directa de tu imagen
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #2E8B57; /* Verde oscuro */
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .header img {
            height: 50px;
            vertical-align: middle;
            margin-right: 10px;
        }
        .header h1 {
            display: inline;
            vertical-align: middle;
        }
        .header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .content {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #dddddd;
            text-align: left;
        }
        th {
            background-color: #2E8B57; /* Verde oscuro */
            color: white;
            cursor: pointer;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="<?php echo $logoUrl; ?>" alt="Logo">
        <h1>Mi Página Web</h1>
        <a href="usuario.php">Usuario</a>
        <a href="cargar.php">archivo</a>
        <a href="#">Venta</a>
        <a href="#">Fecha</a>
        <a href="#">Nombre</a>
        <a href="#">Autor</a>
    </div>
    
</body>
</html>
