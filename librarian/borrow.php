<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;PRESTAMOS CIRCULANTES</strong>
                                </div>

		<div class="span12">		

		<form method="post" action="borrow_save.php">
<div class="span3">

											<div class="control-group">
				<label class="control-label" for="inputEmail">Nombre prestatario</label>
				<div class="controls">
				<select name="member_id" class="chzn-select"required/>
				<option></option>
				<?php $result =  mysql_query("select * from member")or die(mysql_error()); 
				while ($row=mysql_fetch_array($result)){ ?>
				<option value="<?php echo $row['member_id']; ?>"><?php echo $row['firstname']." ".$row['lastname']; ?></option>
				<?php } ?>
				</select>
				</div>
			</div>
				<div class="control-group"> 
					<label class="control-label" for="inputEmail">Fecha de entrega</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="due_date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
				</div>
				<div class="control-group"> 
					<div class="controls">

								<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> PRESTAR</button>
								
					</div>
				</div>
				</div>
				<div class="span8">
						<div class="alert alert-success"><strong>PASO 1. -> Para préstamo selecione <b>MÁXIMO </b> 3 Libros en el recuadro "AGREGAR", (ojo con los que digan excluir de préstamo) PASO 2. -> elija nombre del prestatario <br> (debe ser usuario ya previamente registrado), PASO 3. -> Seleccione la fecha de entrega en el calendario a la izquierda y PASO 4. -> dele clic al botón PRESTAR.</strong></div>
						<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir</a>
								</div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                       
                                        <th>Reg Nº.</th>                                 
                                        <th>Titulo</th>                                 
                                        <th>Categoría</th>
										<th>Autor</th>
										<th>Cota</th>
										<th>Estatus</th>
										<th>Agregar</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from book where status != 'Archive' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];

											$cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td> 
                                    <td><?php echo $row['author']; ?> </td> 
									<td><?php echo $row['book_pub']; ?></td>
									<td width="20"><?php echo $row['status']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
												
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							
			    </form>
			</div>		
			</div>	

<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('Sólo se permiten MAXIMO 3 libros en préstamo por usuario');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
  
<?php include('../footer.php') ?>
