<?php
require 'conexion.php';
$sql = "SELECT Id, Nombre, Telefono, Fecha_nacimiento, Estado_civil FROM empleados WHERE Activo=1";
$resultado= $mysqli->query($sql);
?>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa!</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
        $('#tabla').DataTable();
    });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Empleados</h1>
            <div class="row">
                <!-- auntoplete el navegador le autopleta off pra que no guarde datos de registro -->
            </div>
            <table id="tabla" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>telefono</th>
                        <th>fecha de Nacimiento</th>
                        <th>estado civil</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- fectch assoc es para recorrer colomba po comina y fiala -->
                    <?php while($fila = $resultado->fetch_assoc()){ ?>
                    <tr>
                        <td><?php  echo$fila['Nombre'];?></td>
                        <td><?php  echo$fila['Telefono'];?></td>
                        <td><?php  echo$fila['Fecha_nacimiento'];?></td>
                        <td><?php  echo$fila['Estado_civil'];?></td>
                        <!-- combinacion de php y htmo  -->
                        <td><a href="editar.php?Id=?php  echo$fila['Id'];?> " class="btn btn-warning">Editar</a></td>
                        <td><a href="crear.php?Id=?php  echo$fila['Id'];?>" class="btn btn-danger">crear</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>