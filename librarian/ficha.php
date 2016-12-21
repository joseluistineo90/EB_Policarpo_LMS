<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;FICHA BIBLIOGRAFICA</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="books.php">All</a></li>
										<li><a href="new_books.php">Libros Nuevos</a></li>
										<li><a href="old_books.php">Excluir de Pr&eacute;stamos</a></li>
										<li><a href="lost.php">Libros perdidos</a></li>
										<li><a href="damage.php">Libros da&ntilde;ados</a></li>
										<li><a href="sub_rep.php">Libros en restauraci&oacute;n</a></li>
										<li><a href="ficha.php">Ficha Bibliogr&aacute;fica</a></li>
									</ul>
						<!--  -->
						<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir</a>
								</div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								
							
                                <thead>
                                    <tr>
									    <?php /* Al quitar la estructura autor libros etc elimina la opción search o búsqueda*/?>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

								  $user_query=mysql_query("select * from book where status != 'Archive'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									$book_copies = $row['book_copies'];
									
								 
									$cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
									$cat_row = mysql_fetch_array($cat_query);

									?>
									<h3><a href="#" onclick="return kadabra('menulink')">Ficha del Libro &#187; # <?php echo  $row['book_id'];?><?php echo $row['book_title']; ?></a></h3>
									<div id="navsite">
								 
									<ul id="">																		
                                    <li><?php echo "Reg #____________"?><?php echo $row['book_id']; ?></li>

                                    <li><?php echo "COTA : ____________"?><?php echo $row['book_pub']; ?></li>

                                    <li><?php echo "AUTOR : ____________"?><?php echo $row['author']; ?> </li> 

                                    <li><?php echo "TITULO :____________ "?><?php echo $row['book_title']; ?></li>
                       				<li><?php echo "EDICION : ____________"?><?php echo $row['edition']." ed. /".$row['city']; ?></li>		
                       				<li><?php echo "EDITORIAL : ____________"?><?php echo $row['publisher_name']."/  ".$row['copyright_year']; ?></li>
                                    <li><?php echo "PAGINAS : ____________"?><?php echo $row['pages']." p."." "." Vol.".  $row['book_copies'];?> </li>

									<li><?php echo "CLASIFICACION : ____________"?><?php echo $cat_row ['classname']; ?> </li>
									 
									 <li><?php echo "ISBN / ISNN : ____________"?><?php echo $row['isbn']; ?></li>
									<li><?php echo "OBSERVACIONES : ____________"?><?php echo $row['observations']; ?></li>
									</ul>
									
                                    </div>
									<?php  }  ?>
                           
                                </tbody>
                            </table>										
			</div>		
			</div>
		</div>
    </div>
<html>
<head>

<style type="text/css">
    .colorcito {
    	background-color: grey;
    }

	#menulink {
		display: none;
	}
	a link {
		color: #669999;
		display: none;

	}
	a visited {
		color: #333;
	}
	a link:hover, a visited:hover {
		color: #777;
		background-color: #ccc;
	}
a:link:active, a:visited:active {
	color: #ccc;
	background-color: #ccc;
}
#navsite {
	margin-bottom: 2em;
	border-color: green;
	border-style: dotted;
	border-radius: 1em;
}
</style>
<script type="text/javascript">
	function kadabra (zap) {
		if(document.getElementById){
			var abra=document.getElementById(zap).style;
			if (abra.display=="block") {
				abra.display="none";
			}else {
				abra.display="block";
			}
			return false
		}else {
			return true
		}
	}
</script>

</head>    
<?php include('../footer.php') ?>