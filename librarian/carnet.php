<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('carnet_navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="">	
				<div  class="span6">	

						<div class="alert alert-info"><strong> AGREGUE CARNET LLENE LOS DATOS, GENERE CODIGO DE BARRA IMPRIMA Y BORRE </strong></div>
						<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprima</a>
								</div>

                            <table   border="0" class="table" id="">
                            <p><a href="carnet_add.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Agregar Carnet Usuario</a></p>
							<div class="pull-right">
								                                
                                <tbody>
								 
                        <?php  
                        $user_query=mysql_query("select * from carnet 
								   ")or die(mysql_error());
						while($row=mysql_fetch_array($user_query)){
						$id=$row['carnet_id'];
						$ruta=$row["ruta"];
                        $ruta2=$row["ruta_miniatura"];
						?>
						<hr>
                        
                        <div class ="fondo_carnet"><p><b>BIBLIOTECA PUBLICA RAFAEL VICENTE EGUI</br>(CARNET DE USUARIO)</p>
									<div class="del<?php echo $id ?>">
                                    <div class="foto_carnet"><img src="<?php echo $ruta2 //mostramos la miniaturas?>" width="120" height="120"></div><br>
                                    <div class="margen"><b>Nombres</b></div><div class="margen"><?php echo $row['firstname_carnet']." ". $row['lastname_carnet'];?></div>
								    <div class="margen"><b> C.I </b><?php echo $row['cedula_carnet'];?></div> 
									<div class="margen"><b>DIRECCION</b></div><div class="margen"><?php echo $row['address_carnet']; ?></div> 
                                    <div class="margen"><b>Email</b></div><div class="margen"><?php echo $row['email_carnet']; ?> </div>
									<div class="margen"><b>Tlf </b></div><div class="margen"><?php echo $row['contact_carnet'];?></div>
                                    <div id="barcodeTarget" class="barcodeTarget"></div>
                                    <canvas id="canvasTarget" width="100" height="100"></canvas>
									</div>
									

									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="200" padding="100">
                                        <a rel="tooltip"  title="Borrar" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('carnet_delete_modal.php'); ?>
										<a  rel="tooltip"  title="Editar" id="e<?php echo $id; ?>" href="carnet_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									                                                    
                                    </td>
                                    </div><br>
									<?php  }  ?>
                                </tbody>
                            </table>
	<div id="generator">
     para obtener c&oacute;digo Ingrese <b>CEDULA</b> (s&oacute;lo n&uacute;meros) :
      
       <input type="text" id="barcodeValue" value="12345670">
    </div> 						
    <div class="submit">
        <input type="button" onclick="generateBarcode();" value="Generar el codigo de barras">
    </div>
			</div>		
	
<script>		
$(".uniform_on").change(function(){
    var max= 1;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('SOLO SE PERMITE IMPRIMIR UN CARNET POR VEZ, BORRE LOS QUE YA IMPRIMIO');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>

<html>
  <head>
    <style>
     #generator {
        /*position: relative;*/
        margin-left: 1em;
     }
        
     #barcodeValue {
        width: 100px;
     }   
      #config{
        clear: both;

          overflow: auto;
          margin-top: -500px;
          margin-bottom: -200px;
          margin-right: 100px;
      }
      .config{
          float: right;
          width: 200px;
          height: 250px;
          border: 0;
          margin-left: 100px;
      }
      .config .title{
          font-weight: bold;
          text-align: center;
      }
      .config .barcode2D,
      #miscCanvas{
        display: none;
      }
      .submit{
          /*clear: both;*/
          position: relative;
      }
      #barcodeTarget,
      #canvasTarget {
        position: absolute;
       margin-top: -3.5em;
       margin-left: 390px;
      }        
    </style>
    
    <script type="text/javascript" src="../jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../jquery-barcode.js"></script>
    <script type="text/javascript">
    
      function generateBarcode(){
        var value = $("#barcodeValue").val();
        var btype = $("input[name=btype]:checked").val();
        var renderer = $("input[name=renderer]:checked").val();
        
        var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
        
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
          barWidth: $("#barWidth").val(),
          barHeight: $("#barHeight").val(),
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>
  </head>
  <body>

      <div id="config">
        <div class="config">
          
          <input type="radio" name="btype" id="ean8" value="ean8" checked="checked" style="display:none"><label for="ean8"></label><br />
          
          
        </div>
            
        <div class="config">
          
            <input type="text" id="bgColor" value="#FFFFFF" size="7" style="display:none"><br />
            
          <div class="barcode1D">
              <input type="text" id="barWidth" value="2" size="3" style="display:none"><br />
              <input type="text" id="barHeight" value="50" size="2" style="display:none"><br />
          </div>
          
          
        </div>
            
        
      </div>
        
      
        
    </div>
    
     
  
  </body>
</html>