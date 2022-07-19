<?php
include 'conexion.php';
$cedula=$_GET['cedula'];
$consulta="select cedula,nombres,apellidos,actividadRealizada,telefono,horarioActividad,diregencia,fkidComunidad from asistencia
 where cedula ='$cedula'";
$resultado=$conexion->query($consulta);
while($fila=$resultado->fetch_array()){
	$dato[]=array_map('utf8_encode',$fila);
}
echo json_encode($dato);
$resultado->close();

?>