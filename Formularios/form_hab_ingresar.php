<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$hab_fechaInicio=$_POST['hab_fechaInicio'];
$hab_fechaVnto=$_POST['hab_fechaVnto'];
$hab_nroHabilitacion=$_POST['hab_nroHabilitacion'];
$hab_descripcion=$_POST['hab_descripcion'];


mysqli_query ($con,"INSERT  INTO habilitacion(
hab_fechaInicio,
hab_fechaVnto,
hab_nroHabilitacion,
hab_descripcion
) 
VALUES ('$hab_fechaInicio','$hab_fechaVnto','$hab_nroHabilitacion','$hab_descripcion')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_habilitacion.html");
 mysqli_close($con);
?>