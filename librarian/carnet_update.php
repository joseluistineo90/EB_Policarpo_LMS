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
$year_level_carnet=$_POST['year_level_carnet'];
//nombre y ruta de la imagen, no sé cómo agregarlo abajo.
$ima = "../images/".$carnet_id.".jpg";




mysql_query("update carnet set firstname_carnet='$firstname_carnet',lastname_carnet='$lastname_carnet',cedula_carnet='$cedula_carnet',address_carnet = '$address_carnet', email_carnet = '$email_carnet',contact_carnet = '$contact_carnet',year_level_carnet = '$year_level_carnet' where carnet_id='$id'")or die(mysql_error());
	
//copiamos la imagen que nos ha llegado a la carpeta	
	$ruta=$ima;
	COPY($_FILES["imagen"]["tmp_name"],$ruta);
																
header('location:carnet.php');
}
?>	