<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stilos.css">
    <title>Agenda contactos y servicios</title>
</head>

<body class="p-3 mb-2 bg-light">
    <div class="container">
    <?php include("menu.php")?>
        
        <div class="abs-center row">
            <div class="col-sm-12 col-md-6">
                <h1 class="text-primary fw-bold fs-1">shoganai</h1>
                <p class="text-dark fw-normal fs-3">shoganai te ayuda a aceptar aquello que<br>no podemos cambiar o
                    solucionar.</p>
            </div>
            <div class="col-sm-12 col-md-5" id="divres">
                <div class="row bg-white">
                    <form action="verificar.php" method="POST" id="frmIngreso">
                        <br>
                        <div class="mb-3">
                            <label for="txttel" class="form-label">Número de teléfono</label>
                            <input onclick="numero()" type="number" required min="10" name="txttel" id="txttel"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtcon" class="form-label">Contraseña</label>
                            <input onclick="contraseña()" type="password" required minlength="8" name="txtcon"
                                id="txtcon" class="form-control">
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" value="Entrar" class="btn btn-primary btn-lg">
                        </div>
                        <div class="mb-3">
                            <?php
                                if (isset($_GET["ban"])) {
                                    if ($_GET["ban"]==1) {
                                        echo "<h1>  </h1><div class='alert alert-danger' role='alert'>
                                            Usuario no existe.
                                        </div>";
                                    }
                                }
                            ?>
                        </div>
                        <br>
                    </form>
                    <hr>
                    <div class="d-grid gap-4 col-8 mx-auto">
                        <button onclick="crearCuenta()" action="crearCuenta.php" id="btnCrearcuenta"
                            class="btn btn-secondary" type="button">Crear cuenta nueva</button>
                    </div>
                    <h2> </h2>
                </div>
                <p class="fw-lighter fs-6 text-wrap text-center">Crea tu cuenta y así estarás más cerca de tu familia.
                </p>
            </div>
        </div>
        <?php include("pie.php")?>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>