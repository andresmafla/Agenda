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
            include("menu.php");  
            include("conecta.php");
            $bd = conectar();
            $nom = $_POST["txtnom"];
            $ape = $_POST["txtape"];
            $tel = $_POST["txttel"];
            $con = $_POST["txtcon"];
            $fec = $_POST["txtfec"];
            $nom = $nom." ".$ape;

            $sql = "insert into usuarios values ('$tel','$nom',md5('$con'),'$fec')";
            echo "<div><p>Usuario: $nom <br>Telefono: $tel <br>Fecha Nacimiento: $fec</p></div>";
            try {
                $res = mysqli_query($bd,$sql);
                if (!$res) {
                    echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error de registro.</p>
                    <hr>
                    <p class='mb-0'>La cuenta no se a podido crear revisa nuevamente los datos.</p>
                    </div>";
                }else{
                    echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Registro exitoso.</p>
                    <hr>
                    <p class='mb-0'>La cuenta fue creada exitosamente recuerda tus datos para que puedas hacer el inicio de sesion.</p>
                </div>";
                }
            } catch (\Throwable $th) {
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Numero de telefono duplicado.</p>
                    <hr>
                    <p class='mb-0'>Los datos ingrsados ya se encuentran en nuestra base de datos, por favor verifica nuevamente los datos ingresados.</p>
                </div>";
            }
            mysqli_close($bd);
        ?>
    </div>
    <?php include("pie.php")?>

</body>

</html>