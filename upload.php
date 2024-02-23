<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contactos y servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
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
        <h1>  <br></h1>
        
        <h3>Cargar fotografía de perfil</h3>
        <hr>
        <div class="row">
            <div class="col-6">
                <form action="upload2.php" method="post" id="frmUpload" enctype="multipart/form-data">
                    <input type="hidden" name="txtcel" id="txtcel" value="<?php echo $cel ?>">
                    
                    <div class="mb-3">
                        <label for="txtarc" class="form-label">Seleccione la foto</label>
                        <input type="file" required name="txtarc" id="txtarc" class="form-control">
                    </div>

                    <hr>
                    <br>
                    <input type="submit" value="Cargar" class="btn btn-primary btn-lg">
                    <input type="reset" value="Limpiar" class="btn btn-secondary btn-lg">
                </form>
            </div>
            <div class="col-6"></div>
        </div>
        <?php include("pie.php");?>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>