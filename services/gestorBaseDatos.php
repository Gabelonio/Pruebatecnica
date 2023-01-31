<?php

    /* Insercion de los registros obtenidos del arhcivode texto en la base de datos */
    function setRegistros(array $registrosObtenidos){
        include 'conexion.php';
        forEach($registrosObtenidos as $registro){
            $email = $registro['email'];
            $nombre = $registro['nombre'];
            $apellido = $registro['apellido'];
            $codigo = $registro['codigo'];
            $codigoRevisor = $registro['codigoRevisor'];
            $sql = "INSERT INTO registros (email, nombre, apellido, codigo, codigoRevisorFK) values ('$email', '$nombre', '$apellido', '$codigo', '$codigoRevisor')";
            $resultado = mysqli_query($con, $sql);
            if(!$resultado){
                die(mysqli_error($con));
            }
        }
    }

    /* Obtencion de los registros traidos de la base de datos por codigo*/
    function getRegistrosByCodigo($codigo){
        include 'conexion.php';
        $sql = "SELECT Reg.email as email, Reg.nombre as nombre, Reg.apellido as apellido, Rev.apellido as apellidoRevisor FROM registros Reg, revisores Rev WHERE codigo = '$codigo' AND Reg.codigoRevisorFK = Rev.id";
        $resultado = mysqli_query($con, $sql);
        if(!$resultado){
            die(mysqli_error($con));
        }
        return $resultado;
    }

?>