<?php
    session_start();
    $usuario="";
    if (!isset($_SESSION["xusu"])){
         header("Location: index.php?ban=2");   
    }
    else{
        $cel=$_SESSION["cusu"];
        $usuario=$_SESSION["xusu"];
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="imagenes/logo.png" class="img-thumbnail" alt="...">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active display-6" aria-current="page" href="home.php"><i class="bi-house-door"></i>
                        Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle display-6" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle"></i> <?php echo $usuario;?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item display-6" href="upload.php">Agregar foto de perfil</a></li>
                        <li><a class="dropdown-item display-6" href="info_usuario1.php">Información usuario</a></li>
                        <li><a class="dropdown-item display-6" href="cerrar_sesion.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item navbar-right">
                    <a class="navbar-brand" href="#">
                        <?php
                            echo "<img src='fotos/$cel.jpg' alt='foto' width='100' heigh='100'>";
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>