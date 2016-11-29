<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Agregue Libros</div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Regresar</a></p>
	<div class="addstudent">
	<div class="details">Por favor ingrese los datos al formulario</div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Título del Libro:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="título" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Categoría</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
			<?php
			$cat_query = mysql_query("select * from category");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Autor:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Autor" required>
			</div>
		</div>
		

		<div class="control-group">
			<label class="control-label" for="inputPassword">Ejemplar:</label>
			<div class="controls">
			<input type="number" class="span1" id="inputPassword" name="book_copies"  placeholder="e.1" required>
			</div><br>
			<div class="control-group">
			<label class="control-label" for="inputPassword">volumen:</label>
			<div class="controls">
			<input type="number" name="volumen" min="1" max="100" placeholder="campo no obligatorio">
			</div></div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword"><b>COTA</b></label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="book_pub"  placeholder="cota" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Editorial:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="Editorial" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="ISBN" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Año Copyright :</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="Año Copyright " required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Nuevo</option>
				<option>Antiguo</option>
				<option>Perdido</option>
				<option>Deteriorado</option>
				<option>Para Restaurar</option>
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
<?php include('../footer.php') ?>