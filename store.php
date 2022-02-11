<?php
include('conection.php');

if(count($_POST) > 0) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fotografia = $_POST['fotografia'];
    
    $sql = "INSERT INTO especies (nombre, descripcion, fotografia) VALUES ('$nombre', '$descripcion', '$fotografia')";

    $conn->exec($sql);

    header('Location: index.php');
}    

?>