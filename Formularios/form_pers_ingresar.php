<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$pers_nombres=$_POST['pers_nombres'];
$pers_apellidos=$_POST['pers_apellidos'];
$pers_nroDocumento=$_POST['pers_nroDocumento'];
$pers_fechaNacimiento=$_POST['pers_fechaNacimiento'];
$pers_estadoCivil=$_POST['pers_estadoCivil'];
$pers_fechaRegistro=$_POST['pers_fechaRegistro'];


mysqli_query ($con,"INSERT  INTO personas(
pers_nombres,
pers_apellidos,
pers_nroDocumento,
pers_fechaNacimiento,
pers_estadoCivil,
pers_fechaRegistro
) 
VALUES ('$pers_nombres','$pers_apellidos','$pers_nroDocumento','$pers_fechaNacimiento','$pers_estadoCivil','$pers_fechaRegistro')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
  echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_personas.html");
 mysqli_close($con);
?>