<?php
// Desactivar toda notificación de error
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar solamente errores de ejecución error_reporting(E_ERROR | E_WARNING | E_PARSE);

$con=mysqli_connect("localhost","root","","remis") or die ("error de conexion");
mysqli_select_db ($con,"remis") or die ("error de conexion a la base de datos");

$dom_manzana=$_POST['dom_manzana'];
$dom_casa=$_POST['dom_casa'];
$dom_piso=$_POST['dom_piso'];
$dom_calle=$_POST['dom_calle'];
$dom_departamento=$_POST['dom_departamento'];
$dom_altura=$_POST['dom_altura'];


mysqli_query ($con,"INSERT  INTO domicilios(
dom_manzana,
dom_casa,
dom_piso,
dom_calle,
dom_departamento,
dom_altura
) 
VALUES ('$dom_manzana','$dom_casa','$dom_piso','$dom_calle','$dom_departamento','$dom_altura')") or die ("error sql");
 echo "se cargo correctamente";
 echo '<a href="muni.html" title="Ir la pagina anterior">Ir la pagina anterior</a>';
header("Location:form_domicilios.html");
 mysqli_close($con);
?>