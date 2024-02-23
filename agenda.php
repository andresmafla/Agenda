<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda contactos y servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
    <link href='fullcalendar/main.css' rel='stylesheet' />
</head>

<body>
    <div class="container">
        <?php include("menu2.php");?>
        <h1></h1>
        <h1 class="text-center">Menu de agenda</h1>
        <hr>

        <div class="row">
            <!--esta tarjeta la usamos para crear fecha -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <a href="agregarFecha.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/agregar.png" height="220" width="220" alt="agregar">
                        <h1>Agregar</h1>
                    </a>
                </div>
            </div>
            <!--esta tarjeta la usamos para listar fecha -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <a href="listarFecha.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/listar.png" height="220" width="220" alt="listar">
                        <h1>Listar</h1>
                    </a>
                </div>
            </div>
            <!--esta tarjeta la usamos para eliminar fechas -->
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <a href="eliminarFecha.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/eliminar.png" height="220" width="220" alt="editar">
                        <h1>Eliminar</h1>
                    </a>
                </div>
            </div>
        </div>

        <?php include("pie.php");?>
    </div>

    </script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>