<?php
$servername = "localhost";
$database = "db_soflo";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("La conexión fallo: " . mysqli_connect_error());
}
echo "Se conecto exitosamente a la base de datos";
mysqli_close($conn);
?>