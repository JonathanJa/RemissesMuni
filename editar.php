<?php 

$conexion = mysqli_connect("localhost","root","","remis");



$id = $_POST['id'];
$nombre = $_POST['pers_nombres'];
$apellido = $_POST['pers_apellidos'];
$documento = $_POST['pers_nroDocumento'];
$cuil = $_POST['pers_CUIL'];
$fecha_Nacimiento = $_POST['pers_fechaNacimiento'];
$nacionalidad= $_POST['pers_nacionalidad'];
$genero=$_POST['genero'];
$tipo_documento = $_POST['pers_tipoDocumento'];
$estadoCivil = $_POST['pers_estadoCivil'];
$fecha_registro = $_POST['pers_fechaRegistro'];

$sql= "UPDATE `personas` SET `pers_nombres`='$nombre',`pers_apellidos`='$apellido',`pers_nroDocumento`='$documento',`pers_CUIL`='$cuil',`pers_fechaNacimiento`='$fecha_Nacimiento',`pers_genero`='$genero',`pers_estadoCivil`='$estadoCivil',`pers_nacionalidad`='$nacionalidad',`pers_fechaRegistro`='$fecha_registro',`pers_tipoDocumento`='$tipo_documento' WHERE `id`='$id'";

$resultado = mysqli_query($conexion,$sql);


$provincia=$_POST['provincia'];

$sql5="UPDATE `provincias` SET `nombre_provincia`='$provincia' WHERE `id`='$id'";
$resultado1 = mysqli_query($conexion,$sql5);



$localidad = $_POST['localidad'];

$sql9="UPDATE `localidad` SET `nombre_localidad`='$localidad'WHERE `id`='$id'";
$resultado9=mysqli_query($conexion,$sql9);



$nombre_barrio = $_POST['nombre_barrio'];
$sql6="UPDATE `barrios` SET `nombre_barrio`='$nombre_barrio' WHERE `id`='$id'";
//$sql6="INSERT INTO barrios(nombre_barrio) VALUES ('$nombre_barrio')";
$resultado6= mysqli_query($conexion,$sql6);
//$sql5="INSERT INTO provincias(nombre_provincia) VALUES ('$provincia')";


$domicilioManz = $_POST['dom_manzana'];
$domicilioCasa = $_POST['dom_casa'];
$domicilioPiso = $_POST['dom_piso'];
$domicilioCalle = $_POST['dom_calle'];
$domicilioDepartamento= $_POST['dom_departamento'];
$domicilioAltura = $_POST['dom_altura'];


$sql3= "UPDATE `domicilios` SET `dom_manzana`='$domicilioManz',`dom_casa`='$domicilioCasa',`dom_piso`='$domicilioPiso',`dom_calle`='$domicilioCalle',`dom_departamento`='$domicilioDepartamento',`dom_altura`='$domicilioAltura' WHERE `id`='$id'";

//$sql3= "INSERT INTO domicilios(dom_manzana, dom_casa, dom_piso,dom_calle,dom_departamento,dom_altura) VALUES ('$domicilioManz','$domicilioCasa','$domicilioPiso','$domicilioCalle','$domicilioDepartamento','$domicilioAltura')";

$resultado3 = mysqli_query($conexion,$sql3); 



$tipo = $_POST['tipo'];
$comunic_contactos = $_POST['cont_contactos'];
$correo = $_POST['correo'];

$sql7="UPDATE `contactos` SET `cont_contactos`='$comunic_contactos',`correo`='$correo',`tipo_contacto`='$tipo' WHERE `id`='$id'";
//$sql7 = "INSERT INTO contactos(cont_contactos, correo) VALUES ('$comunic_contactos','$correo')";
$resultado7= mysqli_query($conexion,$sql7);



if($resultado && $resultado1 && $resultado9 && $resultado6 && $resultado3 ){


	echo " Modificados correctamente";
}else{

	echo "no se ha modificado nada";
}




 ?>