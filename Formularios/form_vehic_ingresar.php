<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$veh_nombreTitular=$_POST['veh_nombreTitular'];
$veh_nacionalidad=$_POST['veh_nacionalidad'];
$veh_codigo=$_POST['veh_codigo'];
$veh_marca=$_POST['veh_marca'];
$veh_fechaFabricacion=$_POST['veh_fechaFabricacion'];
$veh_chasis=$_POST['veh_chasis'];
$veh_nroMotor=$_POST['veh_nroMotor'];
$veh_nroPlaca=$_POST['veh_nroPlaca'];
$veh_nroTitulo=$_POST['veh_nroTitulo'];
$veh_nroVntoRTO=$_POST['veh_nroVntoRTO'];
$veh_cedulaVnto=$_POST['veh_cedulaVnto'];

mysqli_query ($con,"INSERT  INTO vehiculos(
veh_nombreTitular,
veh_nacionalidad,
veh_codigo,
veh_marca,
veh_fechaFabricacion,
veh_chasis,
veh_nroMotor,
veh_nroPlaca,
veh_nroTitulo,
veh_nroRTO,
veh_nroVntoRTO,
veh_cedulaVnto
) 
VALUES ('$veh_nombreTitular','$veh_nacionalidad','$veh_codigo','$veh_marca','$veh_fechaFabricacion','$veh_chasis','$veh_nroMotor','$veh_nroPlaca','$veh_nroTitulo','$veh_nroRTO','$veh_nroVntoRTO','$veh_cedulaVnto')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_vehiculos.html");
 mysqli_close($con);
?>
