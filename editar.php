<?php 
require 'conexion.php';
// recibir un dato por vinculo se usa el metodo get
$id =$mysqli->real_escape_string ($_GET['Id']);
$sql = "SELECT  Nombre, Telefono, Fecha_nacimiento, Estado_civil FROM empleados WHERE Id= $id ";
$resultado = $mysqli->query($sql);

$fila = $resultado ->fetch_assoc();

?>
<!doctype html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Empresa!</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Empleados</h1>
            <div class="row">
                <!-- auntoplete el navegador le autopleta off pra que no guarde datos de registro -->
                <form id="registro" name="registro" method="POST" action="guarda.php" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="introduce el nombre" value="<?php echo $fila['Nombre']; ?>" autofocus require>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="introduce el nombre" value="<?php echo $fila['Nombre']; ?>" autofocus require>
                        <!-- el autofocus es para que pase el control a nombre, -->
                    </div>
                    <div class="form-group">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="Telefono" name="Telefono"
                            placeholder="introduce el Telefono" value="<?php echo $fila['Telefono']; ?>" require>

                    </div>
                    <div class="form-group">
                        <label for="Fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="Fecha_nacimiento" name="Fecha_nacimiento"
                            placeholder="introduce la Fecha_nacimineto" value="<?php echo $fila['Fecha_nacimiento'];?>" require>

                    </div>
                    <div class="form-group">
                        <label for="Estado_civil" class="form-label">Estado civil</label>
                        <select class="form-control" id="Estado_civil" name="Estado_civil"
                         require>
                            
                            <option value="soltero"<?php if("Soltero"== $fila['Estado_civil'])
                            { echo 'select';}?>>Soltero</option>
                            <option value="casado"
                            <?php if("casado"== $fila['casado'])
                            { echo 'select';}?>>casado</option>
                            <option value="otro"
                            <?php if("otro"== $fila['otro'])
                            { echo 'select';}?>>otro</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="guarda" name="guarda" type="submit"> guarda</button>
                    </div>
                </form>
            </div>


            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </div>
    </div>

</body>

</html>