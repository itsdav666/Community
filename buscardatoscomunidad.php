<?php
include 'conexion.php';
$idComunidad=$_GET['idComunidad'];
$consulta="select idComunidad,nombre,canton,direccion from comunidad
 where idComunidad ='$idComunidad'";
$resultado=$conexion->query($consulta);
while($fila=$resultado->fetch_array()){
	$dato[]=array_map('utf8_encode',$fila);
}
echo json_encode($dato);
$resultado->close();

?>