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
            session_start();
            include("conecta.php");
            $bd = conectar();
            $tel = $_POST["txttel"];
            $con = $_POST["txtcon"];

            $sql = "select telefono_usuario, nombre from usuarios where telefono_usuario='$tel' and contraseña=md5('$con')";
            $res = mysqli_query($bd,$sql);

            $c = $res->num_rows;
            $arr = mysqli_fetch_array($res);

            if ($c==0) {
                mysqli_close($bd);
                header("Location: index.php?ban=1");
            }else{
                $_SESSION["cusu"]=$arr[0];
                $_SESSION["xusu"]=$arr[1];
                mysqli_close($bd);
                header("Location: home.php");
            }
        ?>
        <?php include("pie.php")?>
    </div>
</body>

</html>