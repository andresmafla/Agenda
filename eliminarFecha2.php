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
       <?php include("menu2.php"); ?>
       <h3>Resultado de la eliminación</h3>
        <?php
            include("conecta.php");
            $bd = conectar();
            $cel="";
            $usuario="";
            if (!isset($_SESSION["xusu"])){
                header("Location: index.php?ban=2");   
            }
            else{
                $celu=$_SESSION["cusu"];
                $usuario=$_SESSION["xusu"];
            }

            $fec = $_POST["victima"];
            $des = $_POST["txtdes"];

            $sql = "delete from agenda where telefono_usuario=$celu and descripcion='$des' and fecha='$fec'";
            //echo $sql;

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Registro no eliminado.</p>
                    <hr>
                    <p class='mb-0'>Upps, tenemos problemas el contacto no ha sido eliminado.</p>
                </div>";
            
            }
            else {
                echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Eliminacion exitosa.</p>
                    <hr>
                    <p class='mb-0'>El recordatorio o fecha especial se a eliminado con exito.</p>
                </div>";
            }
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>