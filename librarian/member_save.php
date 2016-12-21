<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$cedula=$_POST['cedula'];
$gender=$_POST['gender'];
$fecha=$_POST['fecha'];
/*$due_date=$_POST['due_date'];//ojo éste da error en save_member LO QUITÉ  de la consulta*/
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];



								
mysql_query("insert into member(firstname,lastname,cedula,gender,fecha,address,email,contact,type,year_level) values('$firstname','$lastname','$cedula','$gender','$fecha','$address','$email','$contact','$type','$year_level')")or die(mysql_error());
 
 
header('location:member.php');
}
?>	