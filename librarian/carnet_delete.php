<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from carnet where carnet_id='$id'") or die(mysql_error());
header('location:carnet.php');
?>