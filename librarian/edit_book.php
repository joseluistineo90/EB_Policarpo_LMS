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
			<label class="control-label" for="inputPassword">Ejemplar:</label>
			<div class="controls">
			<input type="number" class="span1" id="inputPassword" name="book_copies"  placeholder="e.1" value="<?php echo $row['book_copies']; ?>" required>
			</div><br>
			<div class="control-group">
			<label class="control-label" for="inputPassword">volumen:</label>
			<div class="controls">
			<input type="number" name="volumen" value="<?php echo $row['volumen']; ?>" min="1" max="100" placeholder="campo no obligatorio">
			</div></div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword"><b>COTA</b>:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="book_pub" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Editorial:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="Editorial" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="isbn" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Año Copyright:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="Año copyright" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
				<option>Nuevo</option>
				<option>Antiguo</option>
				<option>Perdido</option>
				<option>Deteriorado</option>
				<option>Para restaurar</option>
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
<?php include('../footer.php') ?>