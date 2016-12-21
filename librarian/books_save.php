<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$colection=$_POST['colection'];
$type=$_POST['type'];
$book_copies=$_POST['book_copies'];
$pages=$_POST['pages'];
$book_pub=$_POST['book_pub'];
$publisher_name=$_POST['publisher_name'];
$edition=$_POST['edition'];
$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];
$city=$_POST['city'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
$status=$_POST['status'];
$clasifications=$_POST['clasifications'];
$observations=$_POST['observations'];




								
mysql_query("insert into book (book_title,category_id,author,colection,type,book_copies,pages,book_pub,publisher_name,edition,isbn,copyright_year,city,date_added,status,clasifications,observations)
 values('$book_title','$category_id','$author','$colection','$type','$book_copies','$pages','$book_pub','$publisher_name','$edition','$isbn','$copyright_year','$city',NOW(),'$status','$clasifications','$observations')")or die(mysql_error());
 
 //Esta página me permite guardar datos de libros para recuperarlos en las tablas
header('location:books.php');
}
?>	
