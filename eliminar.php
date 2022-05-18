<?php 

$conexion = mysqli_connect("localhost","root","","remis");



$id = $_GET['id'];


$sql= "DELETE FROM `personas` WHERE `id`='$id'";

$resultado = mysqli_query($conexion,$sql);




$sql5="DELETE FROM provincias WHERE id='$id'";
$resultado1 = mysqli_query($conexion,$sql5);





$sql9="DELETE FROM  localidad WHERE id='$id'";
$resultado9=mysqli_query($conexion,$sql9);




$sql6="DELETE FROM barrios WHERE id='$id'";
//$sql6="INSERT INTO barrios(nombre_barrio) VALUES ('$nombre_barrio')";
$resultado6= mysqli_query($conexion,$sql6);
//$sql5="INSERT INTO provincias(nombre_provincia) VALUES ('$provincia')";





$sql3= "DELETE FROM domicilios WHERE id='$id'";

//$sql3= "INSERT INTO domicilios(dom_manzana, dom_casa, dom_piso,dom_calle,dom_departamento,dom_altura) VALUES ('$domicilioManz','$domicilioCasa','$domicilioPiso','$domicilioCalle','$domicilioDepartamento','$domicilioAltura')";

$resultado3 = mysqli_query($conexion,$sql3); 




$sql7="DELETE FROM  contactos WHERE id = '$id'";
//$sql7 = "INSERT INTO contactos(cont_contactos, correo) VALUES ('$comunic_contactos','$correo')";
$resultado7= mysqli_query($conexion,$sql7);



if($resultado && $resultado1 && $resultado9 && $resultado6 && $resultado3 ){


	echo " Modificados correctamente";
}else{

	echo "no se ha modificado nada";
}




 ?>