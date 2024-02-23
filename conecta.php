<?php
    function conectar(){
        $bd = mysqli_connect("localhost","root","", "agenda_contactos");
        if (!$bd) {
            echo "<h3>Error de conexion</h3>";
            return NULL;
        }else{
            return $bd;
        }
    }
?>