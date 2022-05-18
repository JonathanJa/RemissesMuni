<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$fechaD=$_POST['fechaD'];
$fechaH=$_POST['fechaH'];

$query ="SELECT pers_nombres,pers_apellidos,pers_nroDocumento,emp_nombre,hab_fechaInicio,hab_fechaVnto FROM personas INNER JOIN empresas ON personas.id=empresas.id_persona INNER JOIN habilitacion ON habilitacion.id = personas.id WHERE habilitacion.hab_fechaInicio LIKE '$fechaD' or habilitacion.hab_fechaVnto LIKE '$fechaH'";


    $resultado = mysqli_query($conexion,$sql);

mysqli_close($con);
?>