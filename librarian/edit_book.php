<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$category_id = $row['category_id'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Editar Libros</div>
			<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Regresar</a></p>
	<div class="addstudent">
	<div class="details">Por favor ingrese los datos al formulario</div>	
	<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Título del libro:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="título del libro" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="título" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Categoría:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
				<?php $query1 = mysql_query("select * from category where category_id != '$category_id'")or die(mysql_error());
				while($row1 = mysql_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Autor:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="autor" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Colección:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="colection" value="<?php echo $row['colection'];?>" placeholder="colección" >
			</div></div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Volúmen:</label>
			<div class="controls">
			<input type="number" class="span1" id="inputPassword" name="book_copies" min="0" placeholder="e.1" value="<?php echo $row['book_copies']; ?>" >
			</div><br>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Páginas:</label>
			<div class="controls">
			<input type="number" class="span1" name="pages" value="<?php echo $row['pages']; ?>"  placeholder="Nº e páinas" min="1" required>
			</div></div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipo de documento:</label>
			<div class="controls">
			<select name="type">
				<option><?php echo $row['type']; ?></option>
				<option>Texto Impreso</option>
				<option>Revista</option>
				<option>Folleto</option>
				<option>Digital</option>
				<option>otro</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword"><b>COTA</b>:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="COTA" >
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Editorial:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="Editorial" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Edición:</label>
			<div class="controls">
			<input type="number" class="span1" id="inputPassword" name="edition" value="<?php echo $row['edition']; ?>" placeholder="Edición Nº" min="1" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">ISBN / ISNN</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="ISBN ó ISSN" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Año Copyright:</label>
			<div class="controls">
			<input type="number" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="Año copyright" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Ciudad :</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="city" value="<?php echo $row['city'];?>"  placeholder="ciudad " required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
				<option>Nuevo</option>
				<option>Excluir de préstamo</option>
				<option>Perdido</option>
				<option>Dañado</option>
				<option>Para restaurar</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Clasificación :</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="clasifications" value="<?php echo $row['clasifications'];?>"  placeholder="clasificación Dewey" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Observaciones :</label>
			<div class="controls">
			<textarea cols="10" rows="5" id="inputPassword" name="observations" value="<?php echo $row['observations'];?>"  placeholder="campo no obligatorio "> </textarea>
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
<?php include('../footer.php') ?>