<?php
try{
	
	$conexion = new pdo("mysql:host=localhost; dbname=remis","root","");
	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");

	
	$sql = "SELECT * FROM USUARIO WHERE CORREO=:corr AND CONTRASEÑA=:pass";
	$resultado = $conexion->prepare($sql);
	
	$correo = htmlentities(addslashes($_POST['correo']));
	$con = htmlentities(addslashes($_POST['contra']));
	
	$resultado->bindValue(":corr",$correo);
	$resultado->bindValue(":pass",$con);
	
	$resultado->execute();
	
	$num_regist = $resultado->rowCount();
	
	if($num_regist != 0){
		
		
		session_start();
		$_SESSION["usuario"] = $_POST["correo"];
		header("location:../index2.php");


	}else{
		//echo "error al direccionar";
		header("location:login.php");
	}
	
}catch(Exeption $e){

	die("Error:".$e->GetMessage());

}	



?>