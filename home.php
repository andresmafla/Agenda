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
</head>

<body>
    <div class="container">
        <?php include("menu2.php");?>

        <!--en esta division haremos uan visualizacion al inicio de los recordatorios para el dia de hoy -->
        <div class="row">
            <?php  
                include("conecta.php");
                $bd = conectar();
                $fechaActual = date('Y-m-d');
                $sql = "select fecha, descripcion from agenda where telefono_usuario=$cel and fecha='$fechaActual'";
                $res = mysqli_query($bd,$sql);
                $c = $res->num_rows;
                if ($c==0) {
                    echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>Hola $usuario!</strong> Hoy no tenemos recordatorios para ti.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }else{
                    echo"<h3>Recordatorios para hoy</h3>";
                    while ($arr = mysqli_fetch_array($res)) {
                        echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong> Fecha: $arr[0] Descripcion: $arr[1]</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    }
                }
                mysqli_close($bd);
            ?>
        </div>

        <div class="row">
            <h1></h1>
            <!--esta tarjeta la usamos para las llamadas -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="llamadas.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/llamar.png" alt="llamar">
                        <h1>Llamar</h1>
                    </a>
                </div>
            </div>
            <!--esta tarjeta la usamos para los contactos -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="contactos.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/agenda.png" alt="llamar">
                        <h1>Contactos</h1>
                    </a>
                </div>
            </div>
            <!--esta tarjeta la usamos para las fechas -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="agenda.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/fecha.png" alt="llamar">
                        <h1>Agenda</h1>
                    </a>
                </div>
            </div>
        </div>
        <?php include("pie.php");?>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>