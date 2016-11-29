<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Agregar usuario</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Regresar</a></p>
	<div class="addstudent">
	<div class="details">Por favor ingrese los datos en el formulario</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nombres:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="escriba los dos nombres" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Apellidos:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="escriba los dos apellidos" required>
			</div>
		</div>
		 <div class="control-group">
			<label class="control-label" for="inputPassword">Cédula:</label>
			<div class="controls">
			<input type="text" id="inputPassword" pattern="[0-9]{6,10}" name="cedula"   placeholder="cédula sin puntos ni guiones" maxlength="10" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Fecha de nacimiento:</label>
			<div class="controls">
			<input type="text" class="w8em format-d-m-y highlight-days-67 " id="sd" name="fecha"  placeholder="Escríbalo así: dd/mm/aaaa" maxlength="10" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Sexo:</label>
			<div class="controls">
			<select name="gender" value="<?php echo $row['gender']; ?>" required>
				<option></option>
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
			<input type="text" id="inputPassword" name="address"  placeholder="Dirección" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="email"  placeholder="correo" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tlf Contacto:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact"  placeholder="Teléfono"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipo:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Estudiante</option>
									<option>Docente</option>
									<option>Visita Infocentro</option>
									<option>Otro</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Grado Instrucción:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>Escuela Básica (primera etapa)</option>
									<option>Escuela Básica (segunda etapa)</option>
									<option>Bachillerato (ciclo básico)</option>
									<option>Bachillerato (ciclo diversificado)</option>
									<option>Universidad</option>
									<option>TSU</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Guardar</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>