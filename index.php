<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Hojas de estilos -->
    <link href="./assets/estilos.css" rel="stylesheet">
    <link href="./assets/estilosindex.css" rel="stylesheet">

    <title>Prueba Tecnica Jerrejerre SAS</title>
</head>

<body>
    <div class="container formulario">
        <div class="card contenedor-principal">
            <div class="card-header titulo-cabezera-formulario">
                GEMA SAS
            </div><!-- Cabezera contenedor principal -->
            <div class="card-body">
                <h3 class="titulo-carga-formulario">Formulario de carga de información</h3>
                <form method="post" action="./services/lectorArchivos.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Carga documento" name="archivoCargado" required>
                        <?php
                        if (isset($_GET['isFormatoInvalido'])) {
                            if ($_GET['isFormatoInvalido']) {
                                echo '<b class="form-text texto-error">ERROR : Documento con Formato Invalido</b>';
                            }
                        }/* Validacion de ingreso a traves de un mensaje de formato invalido */
                        ?>
                    </div><!-- Campo de ingreso de archivo -->
                    <button type="submit" class="btn btn-secondary boton-envio-formulario" name="enviar">Enviar Formulario</button>
                </form><!-- Formulario de carga de archivo usando el metodo POST -->
            </div>
        </div>
    </div>
</body>

</html>