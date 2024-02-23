<!DOCTYPE html>
<html>

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
        <?php include("menu2.php"); ?>
        <h3>Resultado de la modificación</h3>
        <?php
            include("conecta.php");
            $bd = conectar();

            $celu = $_POST["txtcelu"];
            $nom = $_POST["txtnom"];
            $celc = $_POST["txttel"];
            $cat = $_POST["lstcat"];
            $celc_original = $_POST["txtcelori"];

            $sql = "update contactos set telefono_contacto = '$celc', nombre = '$nom', categoria = '$cat' where telefono_usuario = '$celu' and telefono_contacto = '$celc_original'";
            //echo $sql;

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error de registro.</p>
                    <hr>
                    <p class='mb-0'>El contacto no se pudo modificar revisa nuevamente los datos.</p>
                    </div>";
                mysqli_rollback($bd);
            }
            else {
                echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Modificacion exitosa.</p>
                    <hr>
                    <p class='mb-0'>El contacto se ha modificado con exito.</p>
                </div>";
                mysqli_commit($bd);
            }
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>