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
        ?>
        <br>
        <h3>Editar Informacion</h3>
        <div class="row">
            <div class="col-6">
                <?php
                $tel = $_POST["txttel"];
                $nom = $_POST["txtnom"];
                $fec = $_POST["txtfec"];
                ?>

                <form action="info_usuario3.php" method="post">
                    <input type="hidden" name="tel_ori" value="<?php echo $tel ?>">
                    
                    <div class="mb-3">
                        <label for="txttel" class="form-label">Teléfono</label>
                        <input type="number" required min="0" name="txttel" id="txttel" class="form-control" value="<?php echo $tel ?>">
                    </div>
                
                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombre</label>
                        <input type="text" required min="0" name="txtnom" id="txtnom" class="form-control" value="<?php echo $nom ?>">
                    </div>
                
                    <div class="mb-3">
                        <label for="txtfec" class="form-label">Fecha de nacimiento</label>
                        <input type="date" required min="0" name="txtfec" id="txtfec" class="form-control" value="<?php echo $fec ?>">
                    </div>

                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>
        </div> 
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script> 
</body>
</html>