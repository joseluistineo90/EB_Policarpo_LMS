<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>foreach bucle</title>
</head>
<body>
	<?php
$animales[4] = "Pato";
$animales[5] = "Gato";
$animales[21] = "Tortuga”;
$animales[3] = "Hamster";
$animales[45] = "Canario";
foreach ($animales as $clave => $valor){
print("El elemento de índice: ".$clave." contiene
el valor: ".$valor."<br / > " );
}
?>
</body>
</html>

