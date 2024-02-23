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

        <h3>Agregar Contacto</h3>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <form action="agregarContacto2.php" method="post" id="frmAgreCont" enctype="multipart/form-data">
                    <input type="hidden" name="txtcelu" id="txtcelu" value="<?php echo $cel ?>">

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="txtnom" class="form-label">Nombre</label>
                            <input onclick="nombre()" type="text" required name="txtnom" id="txtnom"
                                class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="txtape" class="form-label">Apellido</label>
                            <input onclick="apellido()" type="text" required name="txtape" id="txtape"
                                class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="txttel" class="form-label">Número de Teléfono</label>
                        <input onclick="numero()" type="number" required min="10" name="txttel" id="txttel"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txttel" class="form-label">Categoría de Contacto</label>
                        <select name="lstcat" class="form-select">
                            <option value="familia">Familia</option>
                            <option value="amigos">Amigos</option>
                            <option value="emergencia">Emergencia</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    <hr>
                    <br>
                    <input type="submit" value="Agregar" class="btn btn-primary btn-lg">
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