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
            background-color: #333; /* Negro */
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
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columnas de igual tamaño */
            gap: 20px; /* Espacio entre cards */
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .card img {
            border-radius: 8px;
            width: 100%;
        }
        .card h5 {
            margin: 10px 0;
            font-size: 1.25em;
        }
        .card p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <?php include 'encabezado.php'; ?>
    <div class="content">
        <?php require("includes/funciones.php");
        $array = listar();
        foreach($array as $datos) { ?>
            <div class="card">
                <img src="..." alt="Card image cap">
                <div>
                    <h5><?php echo $datos['nombre']; ?></h5>
                    <p class="card-text"><?php echo $datos['apellido']; ?></p>
                    <p class="card-text"><?php echo $datos['telefono']; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php include 'pie.php'; ?>
</body>
</html>
