<?php

    /* Insercion de los registros obtenidos del arhcivode texto en la base de datos */
    function setRegistros(array $registrosObtenidos){
        include 'conexion.php';
        forEach($registrosObtenidos as $registro){
            $email = $registro['email'];
            $nombre = $registro['nombre'];
            $apellido = $registro['apellido'];
            $codigo = $registro['codigo'];
            $sql = "INSERT INTO registros (email, nombre, apellido, codigo) values ('$email', '$nombre', '$apellido', '$codigo')";
            $resultado = mysqli_query($con, $sql);
            if(!$resultado){
                die(mysqli_error($con));
            }
        }
    }

    /* Obtencion de los registros traidos de la base de datos por codigo*/
    function getRegistrosByCodigo($codigo){
        include 'conexion.php';
        $sql = "SELECT * FROM registros WHERE codigo = '$codigo'";
        $resultado = mysqli_query($con, $sql);
        if(!$resultado){
            die(mysqli_error($con));
        }
        return $resultado;
    }

?>