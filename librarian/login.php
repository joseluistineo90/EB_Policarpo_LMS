	<?php
	if (isset($_POST['submit'])){
	session_start();
	$username = mysql_real_escape_string $_POST['username'];// ojo inyecte SQL y revienta.
	$password = mysql_real_escape_string $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
			header('location:dashboard.php');
	$_SESSION['id']=$row['user_id'];
		}
		else{ ?>
	<div class="alert alert-danger">Acceso Denegado</div>		
	<?php
	}}
	?>