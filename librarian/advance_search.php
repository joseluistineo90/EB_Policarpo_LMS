<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
<?php
$title = $_POST['title'];
/* $category = $_POST['category']; */
$author = $_POST['author'];
?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabla de  búsqueda avanzada</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="books.php">Todo</a></li>
										
										<li><a href="new_books.php">Libros Nuevos</a></li>
										<li><a href="old_books.php">Excluir de Pr&eacute;stamos</a></li>
										<li><a href="lost.php">Libros perdidos</a></li>
										<li><a href="damage.php">Libros dañados</a></li>
										<li><a href="sub_rep.php">Libros en restauración</a></li>
										<li><a href="ficha.php">Ficha Bibliogr&aacute;fica</a></li>

									</ul>
						<!--  -->
						<center class="title">
						<h1>Books List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir</a>
								</div>
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Agregar Libros</a></p>
							
                                <thead>
                                    <tr>
									    <th>Reg Nº.</th>                                 
                                        <th>Título</th>                                 
                                        <th>Categoría</th>
										<th>Autor</th>
										<th class="action">Edici&oacute;n / Ciudad </th>
										<th>Cota</th>
										<th>Editorial / págs</th>
										<th>ISBN / ISSN</th>
										<th>Año Copyright</th>
										<th>Fecha de Agregado</th>
										<th>Estatus</th>
										<th class="action">Acción</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

				
								  $user_query=mysql_query("select * from book where status != 'Archive' and book_title LIKE  '%$title%'
								  OR status != 'Archive' and author LIKE '%$author%'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									$book_copies = $row['book_copies'];
									
									$borrow_details = mysql_query("select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
									$row11 = mysql_fetch_array($borrow_details);
									$count = mysql_num_rows($borrow_details);
									
									$total =  $book_copies  -  $count; 
									/* $t4otal =  $book_copies  - $borrow_details;
									
									echo $total; */
											$cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td><?php echo $row['edition']." ed. /".$row['city']; ?></td>
                                     <td><?php echo $row['book_pub']; ?></td>
									 <td><?php echo $row['publisher_name']." /".$row['pages']." p."; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
									 <td><?php echo $row['date_added']; ?></td>
									 <td><?php echo $row['status']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>