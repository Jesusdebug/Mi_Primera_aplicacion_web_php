<?php 
require 'conexion.php';
// optener los campos que el usuario que envia del formulario a travez del atributo name
$nombre = $mysqli->real_escape_string($_POST['nombre']);//forma simple, nos apoyamos de un comando para darle mas seguridad $mysql->real_escape_string
// esto es para evitar que usuarios puedn inyectar codigo sql para acceder a labase de datos 
$Telefono = $mysqli->real_escape_string($_POST['Telefono']);
$Fecha_nacimiento = $mysqli->real_escape_string($_POST['Fecha_nacimiento']);
$Estado_civil = $mysqli->real_escape_string($_POST['Estado_civil']);

// insercion a sql
$sql= "INSERT INTO empleados (nombre, Telefono, Fecha_nacimiento, Estado_civil, activo) values
 ('$nombre','$Telefono', '$Fecha_nacimiento', '$Estado_civil', 1)";
//para guardar los datos
//echo $sql;
$Resultado = $mysqli->query($sql);
// condicionales
if($Resultado>0){
    echo'registro agregado';
}else{
    echo'Error al agregar nuevo registro';
}
?>