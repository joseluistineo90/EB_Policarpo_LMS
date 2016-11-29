<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Editar Usuario</div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Regresar</a></p>
	<div class="addstudent">
	<div class="details">Por favor Ingrese datos abajo, siempre verifique el Tlf de contacto con el usuario</div>	
	<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nombres:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Nombre" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="escriba los 2 nombres" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Apellidos:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="escriba los 2 apellidos" required>
			</div> <br>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Cédula:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="cedula" value="<?php echo $row['cedula']; ?>" placeholder="Cedula sin puntos ni guiones"  required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Fecha de nacimiento:</label>
			<div class="controls">
			<input type="text" class="w8em format-d-m-y highlight-days-67 " id="sd" name="fecha" value="<?php echo $row['fecha']; ?>" placeholder=" escriba así: dd/mm/aaaa" maxlength="10" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Sexo:</label>
			<div class="controls">
			<select name="gender"  required>
				<option><?php echo $row['gender']; ?></option>
				<option>Masculino Niño</option>
				<option>Masculino Joven</option>
				<option>Masculino Adulto</option>
				<option>Masculino 3ra Edad</option>
				<option>Femenino Niña</option>
				<option>Femenino Joven</option>
				<option>Femenino Adulta</option>
				<option>Femenino 3ra Edad</option>

			</select>
			
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Dirección:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Dirección" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="email" value="<?php echo $row['email']; ?>" placeholder="correo" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tlf Contacto:</label>
			<div class="controls">
			<input type='tel'  pattern="[0-9]{11,11}" class="search" name='contact' value="<?php echo $row['contact']; ?>"  placeholder="sin espacios, puntos o guiones"  autocomplete="off"  maxlength="11" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipo:</label>
			<div class="controls">
			<select name="type" required>
			
			
	
									
									<option><?php echo $row['type']; ?></option>
									<option>Estudiante</option>
									<option>Docente</option>
									<option>Visita Infocentro</option>
									<option>Otro</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nivel de Instrucción:</label>
			<div class="controls">
				<select name="year_level" required>			
									<option><?php echo $row['year_level']; ?></option>
									<option>Escuela Básica (primera etapa)</option>
									<option>Escuela Básica(segunda etapa)</option>
									<option>Bachillerato (Ciclo básico)</option>
									<option>Bachillerato (Ciclo diversificado)</option>
									
									<option>Universidad</option>
				</select>
			</div>
		</div>
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
				<select name="status" required>
									<option><?php  echo $row['status']; ?></option>
									<option>Activo</option>
									<option>Sancionado</option>
				</select>
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