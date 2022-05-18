<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$seg_nombre=$_POST['seg_nombre'];
$seg_nroAseguradora=$_POST['seg_nroAseguradora'];
$seg_cobertura=$_POST['seg_cobertura'];
$seg_patente=$_POST['seg_patente'];
$seg_fechaInicio=$_POST['seg_fechaInicio'];
$fechaVntoPoliza=$_POST['fechaVntoPoliza'];


mysqli_query ($con,"INSERT  INTO segurosautos(
seg_nombre,
seg_nroAseguradora,
seg_cobertura,
seg_patente,
seg_fechaInicio,
fechaVntoPoliza
) 
VALUES ('$seg_nombre','$seg_nroAseguradora','$seg_cobertura','$seg_patente','$seg_fechaInicio','$fechaVntoPoliza')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_seguros.html");
 mysqli_close($con);
?>