<?php
include 'conexion.php';
$idComunidad=$_POST['idComunidad'];
$comunidad=$_POST['comunidad'];
$canton=$_POST['canton'];
$direccion=$_POST['direccion'];




$consulta="insert into comunidad values('".$idComunidad."','".$comunidad."','".$canton."','".$direccion."')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>