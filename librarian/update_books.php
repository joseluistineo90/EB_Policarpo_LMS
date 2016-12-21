<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
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
/* $date_receive=$_POST['date_receive'];
$date_added=$_POST['date_added']; */
$status=$_POST['status'];
$clasifications=$_POST['clasifications'];
$observations=$_POST['observations'];




mysql_query("update book set book_title='$book_title',category_id='$category_id',author='$author',colection='$colection',type='$type',type = '$type',book_copies = '$book_copies',pages = '$pages',book_pub = '$book_pub',publisher_name = '$publisher_name',edition='$edition',isbn = '$isbn',copyright_year='$copyright_year',city='$city',status='$status',clasifications='$clasifications',observations='$observations' where book_id='$id'")or die(mysql_error());
								
								
 header('location:books.php');
}
?>	