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
        <?php include("menu2.php"); ?>
        <h3>Editar Contacto</h3>
        <?php
            include("conecta.php");
            $bd = conectar();
            $celu="";
            $usuario="";
            $nom="";
            $cat="";
            $celc = $_POST["victima"];
            if (!isset($_SESSION["xusu"])){
                header("Location: index.php?ban=2");   
            }
            else{
                $celu=$_SESSION["cusu"];
                $usuario=$_SESSION["xusu"];
            }

            $sql = "select nombre, categoria from contactos where telefono_usuario=$celu and telefono_contacto=$celc";
            $datos = mysqli_query($bd, $sql);
            while ($arr = mysqli_fetch_array($datos)) {
                $nom=$arr[0];
                $cat=$arr[1];
            }
        ?>
        <div class="row">
            <div class="col-6">
                <form action="editarContacto3.php" method="post" id="frmeditCont" enctype="multipart/form-data">
                    <input type="hidden" name="txtcelu" id="txtcelu" value="<?php echo $celu?>">
                    <input type="hidden" name="txtcelori" id="txtcelori" value="<?php echo $celc?>">

                    <div class="mb-3">
                    <label for="txtnom" class="form-label">Nombre</label>
                            <input onclick="nombre()" type="text" required name="txtnom" id="txtnom"
                                class="form-control" value="<?php echo $nom ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txttel" class="form-label">Número de Teléfono</label>
                        <input onclick="numero()" type="number" required min="10" name="txttel" id="txttel"
                            class="form-control" value="<?php echo $celc ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lstcat" class="form-label">Categoría de contacto</label>
                        <select name="lstcat" class="form-select" required>
                            <option selected="true" value="<?php $cat ?>" disabled="disabled"><?php echo $cat ?></option>
                            <option value="familia">Familia</option>
                            <option value="amigos">Amigos</option>
                            <option value="emergencia">Emergenecia</option>
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


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>