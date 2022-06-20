<?php
include("config.php");
//include("session.php");

$firstname = $_POST['articulo'];
$middlename = $_POST['precio_venta'];
//$lastname = $_POST['precio'];
//$birthdate = $_POST['cantidad'];


$sql = "INSERT INTO venta (articulo, precio) 
VALUES('$firstname', '$middlename')";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Producto Agregado Correctamente");';
	echo 'window.location="caja.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="register.php";';
	echo '</script>';
}
?>