<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$tipoDoc_Descripcion=$_POST['tipoDoc_Descripcion'];


mysqli_query ($con,"INSERT  INTO tipodocumentos(
tipoDoc_Descripcion
) 
VALUES ('$tipoDoc_Descripcion')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_tipodocumento.html");
 mysqli_close($con);
?>