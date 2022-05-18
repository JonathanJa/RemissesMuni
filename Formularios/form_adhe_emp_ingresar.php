<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$adhemp_fechaInicioContratos=$_POST['adhemp_fechaInicioContratos'];
$adhemp_fechaVntoContratos=$_POST['adhemp_fechaVntoContratos'];
$adhemp_estadoActual=$_POST['adhemp_estadoActual'];

mysqli_query ($con,"INSERT  INTO adherentes_empresas (
adhemp_fechaInicioContratos,
adhemp_fechaVntoContratos,
adhemp_estadoActual
) 
VALUES ('$adhemp_fechaInicioContratos','$adhemp_fechaVntoContratos','$adhemp_estadoActual')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_adhe_emp_ingresar.html");
 mysqli_close($con);
?>