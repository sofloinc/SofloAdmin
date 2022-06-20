<?php
    include('config.php');
    if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }
    
    //$resultado = $mysqli->query('SELECT SUM(precio) FROM venta WHERE Categoría = "jugador"');
    $resultado = $mysqli->query('SELECT SUM(precio) FROM venta');
    $result = $result->fetch_assoc();
    echo $result;
?>