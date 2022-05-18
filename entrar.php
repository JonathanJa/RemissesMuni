<?php 


$conexion = mysqli_connect("localhost","root","","remis");
$nombre = $_POST['nom'];
$correo = $_POST['email'];
$sql = "SELECT * FROM usuario WHERE nombre = '$nombre' AND correo = '$correo'";
$res = mysqli_query($conexion, $sql);
$cons = mysqli_fetch_array($res);

if($cons){

  echo "adelante puede modificar";
  $contraseña = $_POST['contra'];
  $repite = $_POST['repi'];
  $sql1 = "UPDATE `usuario` SET `nombre`='$nombre',`correo`='$correo',`contraseña`='$contraseña',`repite_contraseña`='$repite' WHERE `nombre`='$nombre'";
  $res1 = mysqli_query($conexion,$sql1);
  if($res1){

  	echo "se ha modificado correctamente";
  }else{

  	echo "No se ha modificado";
  }

}else{

  echo "algo estas haciendo mal";
}

 
//

	/*$sql = "UPDATE usuario SET nombre='$nombre', correo='$email',contraseña='$contraseña',repite_contraseña='$repite' WHERE correo='$email'";
	$result = mysqli_query($conexion,$sql);

	if($result){


		echo "se ha modificado correctamente";
	}else{

		echo "no se puede modificar";
	}
	*/



?>