<?php
include 'conexion.php';
$Usuario=$_POST['Usuario'];
$Password=$_POST['Password'];

$consulta="insert into usuarios values('".$Usuario."','".$Password."')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>
