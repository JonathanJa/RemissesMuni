<?php


include('library/phpqrcode/qrlib.php'); 
    $codesDir = "codes/";   
    if(!file_exists($codesDir))
      mkdir($codesDir);

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $rPass = $_POST['r_pass'];
    


    $codeFile = $codesDir.'test.png';
    $tamano = 10 ;
    $level = "Q";//L es baja, Q es alta H mas grande,M es la chica
    $frameSize=3;

    $hola = "hola";

        
QRcode::png($hola);
$file='<img src="'.$codeFile.'" />';
   

    
$file = $file['name'];
$tipo = $file['type'];
$tamaño = $file['size'];



if($tamaño<=1000000){
    //if($tipo == "image/jpeg" ||$tipo == "image/jpg" ||$tipo == "image/png" || $tipo == "image/gif"){
        //cargar en una carpeta de destino la imagen
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . "codes";

        //movemos la imagen
        move_uploaded_file($file['tmp_name'],$carpeta_destino);

    //}else{

        //echo "no se admite ese tipo de formato";
    //} 

}else{

    echo "El tamaño de la foto es superior";
}



    $conexion = new mysqli("localhost","root","","remis");
    //if($conexion->connect_errno()){

    //  echo "error en la conexion de la base de datos ";
    //  exit();

    //}
    
    //mysqli_set_charset($conexion,"utf8");

    $archivo_destino = fopen($carpeta_destino,"r");
    $archivo_carga = fread($archivo_destino, $tamaño);
    $archivo_carga = addslashes($archivo_carga);

    fclose($archivo_destino);

    $sql = "INSERT INTO usuario(nombre,correo, contraseña,repite_contraseña,foto) VALUES ('$nombre','$correo','$pass','$rPass')";
    
    $resultado = $conexion->query($sql);

    if(mysqli_affected_rows($resultado)){

      echo "se ha insertado el registro";

    }else{

     echo "error al cargar el archivo";
    }
    





 

?>