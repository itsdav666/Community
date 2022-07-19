<?php
include 'conexion.php';
$idComunidad=$_GET['idComunidad'];
$consulta="delete from comunidad 
where idComunidad ='$idComunidad'";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>
