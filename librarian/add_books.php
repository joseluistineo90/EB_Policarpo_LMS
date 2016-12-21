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
			<label class="control-label" for="inputEmail">T�tulo del Libro:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="t�tulo" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Categor�a</label>
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
			<label class="control-label" for="inputPassword">Colecci�n:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="colection" placeholder="colecci�n" >
			</div></div><br>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Vol�men:</label>
			<div class="controls">
			<input type="number" class="span1" id="inputPassword" name="book_copies" min="0"  placeholder="e.1" >
			</div><br>
			<div class="control-group">
			<label class="control-label" for="inputPassword">P�ginas:</label>
			<div class="controls">
			<input type="number"  class="span1" id="inputPassword" name="pages" min ="1" placeholder= "N� de p�ginas" required>
			</div></div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipo de documento:</label>
			<div class="controls">
			<select name="type">
				
				<option>Texto Impreso</option>
				<option>Revista</option>
				<option>Folleto</option>
				<option>Digital</option>
				<option>otro</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword"><b>COTA</b></label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="book_pub"  placeholder="cota" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Editorial:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="Editorial" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Edici�n:</label>
			<div class="controls">
			<input type="number" class="span1" id="inputPassword" name="edition" value="<?php echo $row['edition']; ?>" placeholder="Edici�n N�" min="1" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">ISBN / ISSN</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="ISBN � ISSN" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">A�o Copyright :</label>
			<div class="controls">
			<input type="number" id="inputPassword" name="copyright_year"  placeholder="A�o Copyright " required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Ciudad :</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="city"  placeholder="ciudad " required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Nuevo</option>
				<option>Excluir de pr�stamo</option>
				<option>Perdido</option>
				<option>Da�ado</option>
				<option>Para Restaurar</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Clasificaci�n :</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="clasifications"   placeholder="clasificaci�n Dewey" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Observaciones :</label>
			<div class="controls">
			<textarea cols="10" rows="5" id="inputPassword" name="observations"   placeholder="campo no obligatorio "> </textarea>
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