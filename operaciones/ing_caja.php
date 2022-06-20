<?php

require_once 'conexion.php';

if (isset($_POST)){

    $articulo=$_POST['articulo'];
    $precio=$_POST['precio_venta'];

    echo $articulo;
    echo $precio;

}

?>