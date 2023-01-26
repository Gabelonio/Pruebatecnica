<?php

    include ('gestorBaseDatos.php');

    /* Captura del archivo cargado por el usuario en el formulario */
    $archivoObtenido = $_FILES['archivoCargado']["tmp_name"];

    /* Validacion  de la extension correcta del archivo .txt */
    $nombreArchivo = $_FILES['archivoCargado']['name'];
    $extensionArchivo = explode(".", $nombreArchivo);
    $extensionArchivo = strtolower(end($extensionArchivo));
    if($extensionArchivo != 'txt'){
        header('location: ../index.php?isFormatoInvalido=true');
    }
    
    $archivoCargado = fopen($archivoObtenido, 'r');

    $isFormatoValido = true;
    $registrosObtenidos = [];

    /* Recorre linea a linea el archivo para extraer cada registro y llenar un arreglo de objetos */
    while(!feof($archivoCargado)){
        $filaDatos = explode(",", fgets($archivoCargado));
        if($filaDatos[0]){
            /* Valida el archivo usando los criterios de datos validos y existencia de datos en campos requeridos */
            $isFormatoValido = 
                $isFormatoValido && 
                !(empty($filaDatos[0]) || 
                  empty($filaDatos[3]) || 
                  $filaDatos[3] > 3 ||
                  $filaDatos[3] < 1);
            
            /* Agrega el registro entrante organizando el objeto por atributos */     
            array_push($registrosObtenidos, [
                "email" => $filaDatos[0],
                "nombre" => $filaDatos[1],
                "apellido" => $filaDatos[2],
                "codigo" => $filaDatos[3]
            ]);
        }
    }

    fclose($archivoCargado);

    /* Si el formato no ha cumplido con los requisitos retorna al inicio con un error */
    if(!$isFormatoValido){
        header('location: ../index.php?isFormatoInvalido=true');
    }else{
        /* Agrega los datos obtenidos a una base de datos */
        setRegistros($registrosObtenidos);
        /* Redirecciona a la pagina de visualizacion de datos */
        header('location: ../pages/visualizacionResultados.php');
    }





