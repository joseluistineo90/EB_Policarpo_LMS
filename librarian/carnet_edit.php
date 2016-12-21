<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from carnet where carnet_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Editar Carnet Usuario</div>
			<p><a class="btn btn-info" href="carnet.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Regresar</a></p>
	<div class="addstudent">
	<div class="details">Por favor aseg&uacute;rese de llenar bien los datos</div>	
	<form class="form-horizontal" method="POST" action="carnet_update.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nombres:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname_carnet" value="<?php echo $row['firstname_carnet']; ?>" placeholder="Nombre" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="escriba los 2 nombres" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Apellidos:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname_carnet" value="<?php echo $row['lastname_carnet']; ?>" placeholder="escriba los 2 apellidos" required>
			</div> <br>
		<div class="control-group">
			<label class="control-label" for="inputPassword">C&eacute;dula:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="cedula_carnet" value="<?php echo $row['cedula_carnet']; ?>" placeholder="Cedula sin puntos ni guiones"  required>
			</div>
		</div>	
		

		<div class="control-group">
			<label class="control-label" for="inputPassword">Direcci&oacute;n:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address_carnet" value="<?php echo $row['address_carnet']; ?>" placeholder="Direcci&oacute;n" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="email_carnet" value="<?php echo $row['email_carnet']; ?>" placeholder="correo" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tlf Contacto:</label>
			<div class="controls">
			<input type='tel'  pattern="[0-9]{11,11}" class="search" name='contact_carnet' value="<?php echo $row['contact_carnet']; ?>"  placeholder="sin espacios, puntos o guiones"  autocomplete="off"  maxlength="11" required>
			</div>
		</div>
		
			
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Foto:</label>
			<div class="controls">
			<input type="file" id="inputPassword" name="archivo"  placeholder="no mayor a 300Kb">
			</div>
		</div>	
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Actualizar</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>