<?php
    include('config.php');

  

include("session.php");
    if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }
    
    //$resultado = $mysqli->query('SELECT SUM(precio) FROM venta WHERE Categoría = "jugador"');
    $query='SELECT SUM(precio) FROM venta WHERE MONTH (NOW())=6';
    $res = mysqli_query($mysqli,$query);
  
    
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/iconos/ico1.png" type="image/x-icon">
    <title>Soflo Inc</title>
</head>

<body>
    <div class="container mt-5">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Saldo del Mes Ventas</h5>
                <p class="card-text">Total</p>
                <?php 

        	while($row = mysqli_fetch_array($res)) {
                echo "$ ".$row[0];
               
            }
        ?>
            </div>
        </div>
        <br>
        <center><a href="caja.php">Volver a la caja</a></center>

    </div>

</body>

</html>