<?php
    include('../services/gestorBaseDatos.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Hojas de estilos -->   
    <link href="../assets/estilos.css" rel="stylesheet">
    <link href="../assets/estilosVisualizacion.css" rel="stylesheet">

    <title>Prueba Tecnica Jerrejerre SAS</title>
</head>

<body>
    <div class="container formulario">
        <div class="card contenedor-principal">
            <div class="card-header titulo-cabezera-formulario">
                GEMA SAS
            </div><!-- Cabezera contenedor principal -->
            <div class="card-body">
                <a href = "../index.php">&#60&#60Volver</a>
                <h5 class = "titulo-usuarios">Usuarios activos</h5>
                <table class="table table-bordered tabla-usuarios">
                    <thead class="cabecera-tabla">
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Revisor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = getRegistrosByCodigo(1);
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            $email = $fila['email'];
                            $nombre = $fila['nombre'];
                            $apellido = $fila['apellido'];
                            $apellidoRevisor = $fila['apellidoRevisor'];
                            echo '<tr>
                                    <td>' . $email . '</td>
                                    <td>' . $nombre . '</td>
                                    <td>' . $apellido . '</td>
                                    <td>' . $apellidoRevisor . '</td>
                                  </tr>';
                        }/* Obtencion de usuarios activos */
                        ?>
                    </tbody>
                </table><!-- Tabla de usuarios activos -->
                <h5 class = "titulo-usuarios">Usuarios inactivos</h5>
                <table class="table table-bordered tabla-usuarios">
                    <thead class="cabecera-tabla">
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Revisor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = getRegistrosByCodigo(2);
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            $email = $fila['email'];
                            $nombre = $fila['nombre'];
                            $apellido = $fila['apellido'];
                            $apellidoRevisor = $fila['apellidoRevisor'];
                            echo '<tr>
                                    <td>' . $email . '</td>
                                    <td>' . $nombre . '</td>
                                    <td>' . $apellido . '</td>
                                    <td>' . $apellidoRevisor . '</td>
                                  </tr>';
                        }/* Obtencion de usuarios inactivos */
                        ?>
                    </tbody>
                </table><!-- Tabla de usuarios inactivos -->
                <h5 class = "titulo-usuarios">Usuarios en espera</h5>
                <table class="table table-bordered tabla-usuarios">
                    <thead class="cabecera-tabla">
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Revisor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = getRegistrosByCodigo(3);
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            $email = $fila['email'];
                            $nombre = $fila['nombre'];
                            $apellido = $fila['apellido'];
                            $apellidoRevisor = $fila['apellidoRevisor'];
                            echo '<tr>
                                    <td>' . $email . '</td>
                                    <td>' . $nombre . '</td>
                                    <td>' . $apellido . '</td>
                                    <td>' . $apellidoRevisor . '</td>
                                  </tr>';
                        }/* Obtencion de usuarios en espera */
                        ?>
                    </tbody>
                </table><!-- Tabla de usuarios en espera -->
            </div>
        </div>
    </div>
</body>

</html>