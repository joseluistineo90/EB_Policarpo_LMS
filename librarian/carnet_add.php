<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('carnet_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
				
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;EMITIR CARNET </strong>
                                </div>
                                <p><a href="carnet.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Regresar</a></p>
                       <div class="addstudent">
	<div class="details">Por favor ingrese los datos del carnet de usuario </div>		
	<form class="form-horizontal" method="POST" action="carnet_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nombres:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname_carnet"  placeholder="escriba los dos nombres" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Apellidos:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname_carnet"  placeholder="escriba los dos apellidos" required>
			</div>
		</div>
		 <div class="control-group">
			<label class="control-label" for="inputPassword">C&eacute;dula:</label>
			<div class="controls">
			<input type="text" id="inputPassword" pattern="[0-9]{6,10}" name="cedula_carnet"   placeholder="c&eacute;dula sin puntos ni guiones" maxlength="10" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Direcci&oacute;n:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address_carnet"  placeholder="Direcci&oacute;n" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="email_carnet"  placeholder="correo" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tlf Contacto:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact_carnet"  placeholder="Tel&eacute;fono"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Grado de Instrucci&oacute;n:</label>
			<div class="controls">
				<select name="year_level_carnet" >
					

									<option> </option>
									<option>Escuela B&aacute;sica (primera etapa)</option>
									<option>Escuela B&aacute;sica (segunda etapa)</option>
									<option>Bachillerato (ciclo b&aacute;sico)</option>
									<option>Bachillerato (ciclo diversificado)</option>
									<option>Universidad</option>
									<option>TSU</option>
				</select>
			</div>
		</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Foto:</label>
			<div class="controls">
			<input type="file" id="inputPassword" name="imagen"  size="50">
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