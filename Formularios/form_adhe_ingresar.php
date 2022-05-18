<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$adhe_descripcionRTO=$_POST['adhe_descripcionRTO'];
$adhe_habilitacion=$_POST['adhe_habilitacion'];

mysqli_query ($con,"INSERT  INTO adherentes (
adhe_descripcionRTO,
adhe_habilitacion
) 
VALUES ('$adhe_descripcionRTO','$adhe_habilitacion')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="../muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_adherentes.html");
 mysqli_close($con);
?>