<?php
include 'conexion.php';
$cedula=$_GET['cedula'];
$consulta="delete from asistencia 
where cedula ='$cedula'";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>
