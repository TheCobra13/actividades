<?php
require_once("conexion.php");
$conn = conectar();
function insertar($nombre, $apellido, $telefono){
    $conn = conectar();
    $sql = "INSERT INTO usuario (nombre, apellido, telefono) VALUES ('".
    $nombre. "','" . $apellido . "','" . $telefono . "')";
    mysqli_query($conn, $sql);
}
/*function listar(){
    global $conn;
    $sql = "select * from usuario";
    $r = mysqli_query($conn, $sql);
    $datos = mysqli_fetch_assoc($r);
    return $datos;
}*/

function listar() {
    $conn = conectar();
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $datos = [];
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }
        $conn->close();
        return $datos;
    } else {
        $conn->close();
        return []; // Asegúrate de devolver un array vacío si no hay resultados
    }
}
?>