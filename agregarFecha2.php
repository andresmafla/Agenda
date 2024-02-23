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
            $tel = $_POST["txtcelu"];
            $fec = $_POST["txtfec"];
            $des = $_POST["txtdes"];
        ?>
        <h1>  </h1>
        <h3>Resultado de agregar fecha de recordatorio</h3>
        <hr>
        <?php

            $sql = "insert into agenda values ('$tel','$fec','$des')";
            echo "<div><p>Fecha: $fec <br>Descripcion: $des</p></div>";
            try {
                $res = mysqli_query($bd,$sql);
                if (!$res) {
                    echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error de registro.</p>
                    <hr>
                    <p class='mb-0'>El recordatorio no se pudo registrar, revise nuevamente los datos.</p>
                    </div>";
                }else{
                    echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Registro exitoso.</p>
                    <hr>
                    <p class='mb-0'>El recordatorio se ha registrado con exito.</p>
                </div>";
                }
            } catch (\Throwable $th) {
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error duplicado.</p>
                    <hr>
                    <p class='mb-0'>Los datos ingresados no registraron.</p>
                </div>";
            }
            mysqli_close($bd);
        ?>
    </div>
    <?php include("pie.php")?>

</body>

</html>