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
        <?php 
            include("menu2.php");
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
        <h1></h1>
        <h3>Agregar recordatorio o fecha especial</h3>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <form action="agregarFecha2.php" method="post" id="frmAgreFecha" enctype="multipart/form-data">
                    <input type="hidden" name="txtcelu" id="txtcelu" value="<?php echo $cel ?>">
                    <div class="mb-3">
                        <label for="txtfec" class="form-label">Fecha de recordatorio</label>
                        <input onclick="recordatorio()" type="date" required name="txtfec" id="txtfec" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtdes" class="form-label">Descripción recordatorio</label>
                        <textarea class="form-control" name="txtdes" id="txtdes" required></textarea>
                    </div>

                    <hr>
                    <br>
                    <input type="submit" value="Agregar" class="btn btn-primary btn-lg">
                    <input type="reset" value="Limpiar" class="btn btn-secondary btn-lg">
                </form>
            </div>
            <div class="col-sm-12 col-md-6"></div>
        </div>



        <?php include("pie.php");?>
    </div>

    </script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>