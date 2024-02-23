<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda contactos y servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php 
        include("menu2.php");
        include("conecta.php");
        $bd = conectar();
        ?>
        <br>
        <h3>Resultado de la edicion</h3>
        <div class="row">
            <?php
            $tel_ori = $_POST["tel_ori"];
            $tel = $_POST["txttel"];
            $nom = $_POST["txtnom"];
            $fec = $_POST["txtfec"];

            $sql = "update usuarios set telefono_usuario = '$tel', nombre = '$nom', fecnac = '$fec' where telefono_usuario = '$tel_ori' ";
            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'><b>Error</b><br>suario no modificado!!<br>" . mysqli_errno($bd) ." - " . mysqli_error($bd) . "</div>";
                mysqli_rollback($bd);
            }
            else {
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>Usuario Modificado con éxito!!</div>";
                mysqli_commit($bd);
            }
            mysqli_close($bd);

            ?>
        </div> 
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script> 
</body>
</html>