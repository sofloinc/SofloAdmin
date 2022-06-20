<?php
include('config.php');
include("session.php");
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
    <div class="container">


        <nav class="nav justify-content-center">
            <a class="nav-link active" href="menu.php">Inicio</a>
            <a class="nav-link" href="saldos.php">saldos</a>
        </nav>

    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Caja diaria
            </div>
            <div class="card-body">
                <h5 class="card-title">Ingresar</h5>
                <form action="register.php" method="post">

                    <div class="form-group">
                        <label for="">Artículo</label>
                        <input type="text" list="browsers" class="form-control" name="articulo" id="browser" aria-describedby="helpId"
                            placeholder="Articulo">

                        <datalist id="browsers">
                            <option value="TPU">
                            <option value="Hydrogel">
                            <option value="Templado">
                            <option value="Art. Informatica">
                            <option value="Servicio Tecnico">
                        </datalist>

                        <small id="helpId" class="form-text text-muted">Tipo y descripción</small>
                    </div>
                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="text" class="form-control" name="precio_venta" id="" aria-describedby="helpId"
                            placeholder="$">
                        <small id="helpId" class="form-text text-muted">Precio Venta</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ingresar</button>

                    </div>

                </form>
            </div>
            <div class="card-footer">
                <a href="ayuda.php">Ayuda.</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>