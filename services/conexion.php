<?php
    /* Conexion con la base de datos GemaSAS con usuario root y sin clave*/
    $con = new mysqli('localhost', 'root', '', 'GemaSAS');
    if (!$con) {
        echo "Conexion a base de datos fallida";
        die(mysqli_error($con));
    }
?>