<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id = $_POST['id'];	
$firstname_carnet=$_POST['firstname_carnet'];
$lastname_carnet=$_POST['lastname_carnet'];
$cedula_carnet=$_POST['cedula_carnet'];
$address_carnet=$_POST['address_carnet'];
$email_carnet=$_POST['email_carnet'];
$contact_carnet=$_POST['contact_carnet'];

//nombre y ruta de la imagen
		  $tamano = $_FILES["archivo"]['size']; 
          $tipo = $_FILES["archivo"]['type']; 
          $archivo = $_FILES["archivo"]['name']; 
         ($archivo != "") or die ("Error al subir la imagen ".$archivo); 

//definimos la extension de la imagen            
($tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/png") or die ("Sólo se admiten imágenes en <b>.jpg</b> <b>.png</b> y <b>.jpeg</b>"); 
          //subimos la imagen original              
          $destino =  "../imagenes/originales/".$archivo; //ruta de la imagen original
          (copy($_FILES['archivo']['tmp_name'],$destino)) or die ("Error al subir la imagen ".$archivo); 
           
          //creamos la miniaturas
          $source=$destino; 
          $destmini="../imagenes/miniaturas/".$archivo;//ruta donde se guardan las miniaturas
          $width_d=200; // ancho de la imagen
          $height_d=250; // alto de la imagen 
          //copiamos la miniatura
          list($width_s, $height_s, $type, $attr) = getimagesize($source, $info2); 
          $gd_s = imagecreatefromjpeg($source); 
          $gd_d = imagecreatetruecolor($width_d, $height_d);  
          imagecopyresampled($gd_d, $gd_s, 0, 0, 0, 0, $width_d, $height_d, $width_s, $height_s); 
          imagejpeg($gd_d, $destmini);  
          imagedestroy($gd_s); 
          imagedestroy($gd_d); 




mysql_query("update carnet set firstname_carnet='$firstname_carnet',lastname_carnet='$lastname_carnet',cedula_carnet='$cedula_carnet',address_carnet = '$address_carnet', email_carnet = '$email_carnet',contact_carnet = '$contact_carnet',ruta ='$destino',ruta_miniatura ='$destmini' where carnet_id='$id'")or die(mysql_error());
	
//copiamos la imagen que nos ha llegado a la carpeta	
	$ruta=$ima;
	COPY($_FILES["imagen"]["tmp_name"],$ruta);
																
header('location:carnet.php');
}
?>	