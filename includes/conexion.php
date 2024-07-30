<?php
function conectar(){
    $conn = mysqli_connect("localhost", "root", "", "tecnologiaweb2");
    if(!$conn){
        echo "Error en la conexion ".mysqli_connect_error();
    }
  
    return $conn;
}
?>