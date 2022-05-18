<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$chof_nroCarnet=$_POST['chof_nroCarnet'];
$chof_fechaVencCarnet=$_POST['chof_fechaVencCarnet'];
$chof_nroCertifBuenaConducta=$_POST['chof_nroCertifBuenaConducta'];


mysqli_query ($con,"INSERT  INTO choferes(
chof_nroCarnet,
chof_fechaVencCarnet,
chof_nroCertifBuenaConducta
) 
VALUES ('$chof_nroCarnet','$chof_fechaVencCarnet','$chof_nroCertifBuenaConducta')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_choferes.html");
 mysqli_close($con);
?>