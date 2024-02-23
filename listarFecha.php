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
        <!--tomamos los datos del usuario activo -->
        <?php 
            include("menu2.php");
            include("conecta.php");
            $bd = conectar();
            $cel="";
            $usuario="";
            if (!isset($_SESSION["xusu"])){
                header("Location: index.php?ban=2");   
            }
            else{
                $cel=$_SESSION["cusu"];
                $usuario=$_SESSION["xusu"];
            }
        ?>
        <h1> <br></h1>
        <h3>Listar recordatorio o fecha especial</h3>
        <hr>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php
                    $sql = "select fecha, descripcion from agenda where telefono_usuario=$cel";
                    $res = mysqli_query($bd,$sql);
                    $c = $res->num_rows;
                    if ($c==0) {
                        echo"<div class='alert alert-primary' role='alert'>
                        Usted aun no tiene recordatorios o fechas especiales registradas!
                        </div>";
                    }else{
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($arr = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>$arr[0]</td>";
                            echo "<td>$arr[1]</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                }
            ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6"></div>
        </div>

        <?php include("pie.php");?>
    </div>

    </script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>