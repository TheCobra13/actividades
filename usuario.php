<?php
require("includes/funciones.php");

if(isset($_POST['submit'])){
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";

    $errores = array();
    if (empty($nombre)) {
        $errores['nombre'] = "El Nombre es obligatorio.";
    } elseif (strlen($nombre) < 3 || strlen($nombre) > 20) {
        $errores['nombre'] = "El nombre debe tener entre 3 y 20 caracteres.";
    } elseif (!preg_match("/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/", $nombre)) {
        $errores['nombre'] = "El nombre no debe contener números ni caracteres especiales.";
    }
    if (empty($apellido)) {
        $errores['apellido'] = "El Apellido es obligatorio.";
    } elseif (strlen($apellido) < 3 || strlen($apellido) > 20) {
        $errores['apellido'] = "El apellido debe tener entre 3 y 20 caracteres.";
    } elseif (!preg_match("/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/", $apellido)) {
        $errores['apellido'] = "El apellido no debe contener números ni caracteres especiales.";
    }
    if (empty($telefono)) {
        $errores['telefono'] = "El telefono es obligatorio.";
    } elseif (strlen($telefono) != 8 || !preg_match("/^[0-9]+$/", $telefono)) {
        $errores['telefono'] = "El teléfono debe contener exactamente 8 números.";
    }
    if (empty($errores)) {
        insertar($nombre, $apellido, $telefono);
        $mensaje_exito = "Usuario registrado exitosamente";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="text"].input-error,
        input[type="number"].input-error {
            border-color: red;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-size: 14px;
        }
        .button-wrapper {
            text-align: center;
            margin-top: 20px;
        }
        .back-button {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Formulario</h2>
        <?php 
        if(isset($mensaje_exito)){
            echo '<p class="success">' . $mensaje_exito . '</p>';
        }
        ?>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" class="<?php echo isset($errores['nombre']) ? 'input-error' : ''; ?>" value="<?php echo isset($nombre) ? $nombre : ''; ?>"><br>
        <?php 
        if(isset($errores['nombre'])){
            echo '<p class="error">' . $errores['nombre'] . '</p>';
        }
        ?>
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" class="<?php echo isset($errores['apellido']) ? 'input-error' : ''; ?>" value="<?php echo isset($apellido) ? $apellido : ''; ?>"><br>
        <?php 
        if(isset($errores['apellido'])){
            echo '<p class="error">' . $errores['apellido'] . '</p>';
        }
        ?>
        <label for="telefono">Teléfono</label><br>
        <input type="number" name="telefono" class="<?php echo isset($errores['telefono']) ? 'input-error' : ''; ?>" value="<?php echo isset($telefono) ? $telefono : ''; ?>"><br>
        <?php 
        if(isset($errores['telefono'])){
            echo '<p class="error">' . $errores['telefono'] . '</p>';
        }
        ?>
        <input type="submit" name="submit" value="Enviar">
        <div class="button-wrapper">
            <a href="index.php" class="back-button">Volver a la página principal</a>
        </div>
    </form>
</body>
</html>
