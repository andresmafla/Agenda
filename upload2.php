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
        <?php
            include("menu2.php");
        ?>
        <h3>Resultado de la carga</h3>
        <hr>
        <div class="row">
            <div class="col-6">
                <?php
                    $ced = $_POST["txtcel"];
                    $tmp = $_FILES["txtarc"]["tmp_name"];
                    $name = $_FILES["txtarc"]["name"];
                    $size = $_FILES["txtarc"]["size"];
                    $type = $_FILES["txtarc"]["type"];
                    $error = $_FILES["txtarc"]["error"];

                    if ($error==0){
                        echo "<div class='alert alert-success' role='alert'>
                            <h4 class='alert-heading'>¡Bien hecho!</h4>
                            <p>Carga exitosa.</p>
                            <hr>
                            <p class='mb-0'>La imagen cargada se guardo con exito.</p>
                        </div>";
                        move_uploaded_file($tmp,"fotos/" . $ced . ".jpg");
                    }
                    else{
                        echo "<div class='alert alert-danger' role='alert'>
                            <h4 class='alert-heading'>Error</h4>
                            <p>Error de carga.</p>
                            <hr>
                            <p class='mb-0'>Problemas con la carga del archivo.</p>
                        </div>";
                    }

                ?>
            </div>

            <div class="col-6">
                
            </div>
        </div>
    </div>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>