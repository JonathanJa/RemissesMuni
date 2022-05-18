<?php
	//conectamos con el servidor 
	$conectar =@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo "No se pudo conectar con el servidor";

	}else{

		$base=mysql_select_db('remis');
		if (!$base){
			echo "No se encontro la base de datos";
		}
	}

	//recuperar las variables
	$pers_nombres=$_POST['pers_nombres'];
	$pers_apellidos=$_POST['pers_apellidos'];
	$pers_nroDocumento=$_POST['pers_nroDocumento'];
	$pers_fechaNacimiento=$_POST['pers_fechaNacimiento'];
	$pers_estadoCivil=$_POST['pers_estadoCivil'];
	$pers_fechaRegistro=$_POST['pers_fechaRegistro'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO personas VALUES ('$pers_nombres',
									'$pers_apellidos', 
									'$pers_nroDocumento',
									'$pers_fechaNacimiento',
									'$pers_estadoCivil',
									'$pers_fechaRegistro')";

	//ejecutamos la sentencia de sql

	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion 
	if(!$ejecutar){
		echo="Hubo algun error";

	}else{
		echo"Datos Gurdados Correctamente<br><a href='muni.hml'>Volver</a>;
	}

?>