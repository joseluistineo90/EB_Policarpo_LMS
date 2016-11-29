<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;TABLA DE USUARIOS --> (ACTIVE o SANCIONE al usuario sólamente a partir de su segunda visita editando su status desde "ACCION")</strong>
                                </div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_member.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Agregar Usuario</a></p>
							<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir</a>
								</div>

                                <thead>
                                    <tr>
                       
                                        <th>Nombre</th>                                 
                                        <th>sexo / Fecha Nacimiento</th>
									
										<th>Dirección y correo</th>
										<th>Nº Contacto / tipo</th>
										<th>cedula ó pasaporte</th>
										<th>Grado</th>
										<th>Status</th>
										<th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from member")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['gender']." /".$row['fecha']; ?> </td> 
                                    <td><?php echo $row['address']." / ".$row['email']; ?> </td>

                                    <td><?php echo $row['contact']." ".$row['type']; ?></td>
									<td><?php echo $row['cedula']; ?></td> 
									<td><?php echo $row['year_level']; ?></td> 
									<td><?php echo $row['status']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="10">
                                        <a rel="tooltip"  title="Borrar" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_member_modal.php'); ?>
										<a  rel="tooltip"  title="Editar" id="e<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('../footer.php') ?>