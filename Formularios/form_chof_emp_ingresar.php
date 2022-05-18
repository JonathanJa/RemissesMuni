<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$chofemp_fechaContrato=$_POST['chofemp_fechaContrato'];
$chofemp_fechaVntoContrato=$_POST['chofemp_fechaVntoContrato'];



mysqli_query ($con,"INSERT  INTO choferes_empresas(
chofemp_fechaContrato,
chofemp_fechaVntoContrato
) 
VALUES ('$chofemp_fechaContrato','$chofemp_fechaVntoContrato')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:../muni.html");
 mysqli_close($con);
?>