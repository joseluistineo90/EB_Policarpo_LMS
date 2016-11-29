<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('carnet_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="">	
				<div  class="span6">	

						<div class="alert alert-info"><strong>CARNETS</strong></div>
						<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprima</a>
								</div>

                            <table   border="1" class="table" id="">
                            <p><a href="carnet_add.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Agregar Carnet Usuario</a></p>
							<div class="pull-right">
								                                
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from carnet 
								   ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['carnet_id'];
									
									?>
									<hr>
                                    <div class =""><h4 align="center"><b>BIBLIOTECA PUBLICA RAFAEL VICENTE EGUI</b></h4>
                                    <h6 align="center">(Carnet de usuario)</h6></div>
                                     
									<div class="del<?php echo $id ?>">
                                    <div class=""><?php echo $row['imagen'];?></div>
                                    <div><b>Nombres</b></div><div><?php echo $row['firstname_carnet']." ". $row['lastname_carnet'];?></div>
								    <div><b> C.I </b></div><div><?php echo $row['cedula_carnet'];?></div> 
									<div><b>DIRECCION</b></div><div><?php echo $row['address_carnet']; ?></div> 
                                    <div><b>Email</b></div><div><?php echo $row['email_carnet']; ?> </div>
									<div><b>Tlf </b></div><div><?php echo $row['contact_carnet'];?></div>
									<div><b>Grado</b></div><div><?php echo $row['year_level_carnet'];?></div>
									

									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20" padding="100">
                                        <a rel="tooltip"  title="Borrar" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('carnet_delete_modal.php'); ?>
										<a  rel="tooltip"  title="Editar" id="e<?php echo $id; ?>" href="carnet_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									 
                                    </div>
									<?php  }  ?>
                                </tbody>
                            </table>
							

			</div>		
	
<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('Sólo se permiten 3 libros Máximo por usuario');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
