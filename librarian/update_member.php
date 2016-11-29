<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$cedula=$_POST['cedula'];
$fecha=$_POST['fecha'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];
$status=$_POST['status'];

mysql_query("update member set firstname='$firstname',lastname='$lastname',cedula='$cedula',gender='$gender',address = '$address', email = '$email',fecha = '$fecha',contact = '$contact',type = '$type',year_level = '$year_level',status = '$status' where member_id='$id'")or die(mysql_error());
								
								
header('location:member.php');
}
?>	