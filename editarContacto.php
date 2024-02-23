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
        <!--tomamos los datos del usuario activo -->
        <?php
        include("menu2.php");
        include("conecta.php");
        $bd = conectar();
        $cel = "";
        $usuario = "";
        if (!isset($_SESSION["xusu"])) {
            header("Location: index.php?ban=2");
        } else {
            $cel = $_SESSION["cusu"];
            $usuario = $_SESSION["xusu"];
        }
        ?>

        <h1> <br></h1>
        <h3>Editar Contacto</h3>
        <hr>

        <form action="editarContacto2.php" method="POST">
            <!--en esta divicion manejaremos lo contactos familiares -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php
                    $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='familia'";
                    $res = mysqli_query($bd, $sql);
                    $c = $res->num_rows;
                    if ($c == 0) {
                        echo "<div class='alert alert-primary' role='alert'>
                        Usted no tiene registrado contactos de familiares!
                            </div>";
                    } else {
                    ?>
                        <h4 class="bg-warning text-dark text-center">Familia</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Llamar</th>
                                    <th>Numero Telefonico</th>
                                    <th>Nombres</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='familia'";
                                $datos = mysqli_query($bd, $sql);
                                while ($arr = mysqli_fetch_array($datos)) {
                                    echo "<tr>";
                                    echo "<td><input type='radio' name='victima' value='$arr[0]' required></td>";
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

            <!--en esta divicion manejaremos lo contactos de amigos -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php
                    $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='amigos'";
                    $res = mysqli_query($bd, $sql);
                    $c = $res->num_rows;
                    if ($c == 0) {
                        echo "<div class='alert alert-primary' role='alert'>
                        Usted no tiene registrado contactos de familiares!
                            </div>";
                    } else {
                    ?>
                        <h4 class="bg-info text-dark text-center">Amigos</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Llamar</th>
                                    <th>Numero Telefonico</th>
                                    <th>Nombres</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='amigos'";
                                $datos = mysqli_query($bd, $sql);
                                while ($arr = mysqli_fetch_array($datos)) {
                                    echo "<tr>";
                                    echo "<td><input type='radio' name='victima' value='$arr[0]' required></td>";
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

            <!--en esta divicion manejaremos lo contactos de emergencia -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php
                    $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='emergencia'";
                    $res = mysqli_query($bd, $sql);
                    $c = $res->num_rows;
                    if ($c == 0) {
                        echo "<div class='alert alert-primary' role='alert'>
                        Usted no tiene registrado contactos de emergencia!
                            </div>";
                    } else {
                    ?>
                        <h4 class="bg-danger text-dark text-center">Emergencias</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Llamar</th>
                                    <th>Numero Telefonico</th>
                                    <th>Nombres</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='emergencia'";
                                $datos = mysqli_query($bd, $sql);
                                while ($arr = mysqli_fetch_array($datos)) {
                                    echo "<tr>";
                                    echo "<td><input type='radio' name='victima' value='$arr[0]' required></td>";
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

            <!--en esta divicion manejaremos cualquier tipo de contactos -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php
                    $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='otros'";
                    $res = mysqli_query($bd, $sql);
                    $c = $res->num_rows;
                    if ($c == 0) {
                        echo "<div class='alert alert-primary' role='alert'>
                        Usted no tiene registrado contactos de tipo otros!
                            </div>";
                    } else {
                    ?>
                        <h4 class="bg-success text-dark text-center">Otros</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Llamar</th>
                                    <th>Numero Telefonico</th>
                                    <th>Nombres</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select telefono_contacto, nombre from contactos where telefono_usuario=$cel and categoria='otros'";
                                $datos = mysqli_query($bd, $sql);
                                while ($arr = mysqli_fetch_array($datos)) {
                                    echo "<tr>";
                                    echo "<td><input type='radio' name='victima' value='$arr[0]' required></td>";
                                    echo "<td>$arr[0]</td>";
                                    echo "<td>$arr[1]</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php
                    }
                    mysqli_close($bd);
                    ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6"></div>
            </div>

            <hr>
            <input type="submit" value="Editar Contacto" class="btn btn-danger">
        </form>



        <?php include("pie.php"); ?>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>