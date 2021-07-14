<?php 
require_once("conexionsql.php");
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$unitario = $_POST['unitario'];
$total = $_POST['total'];
$medida = $_POST['medida'];
$solicitud = $_POST['solicitud'];
$sql="INSERT INTO ITEMS (NOMBREBIEN,CANTIDAD,VALOR_UNIDAD,VALORTOTAL,UNIDAD_MEDIDA,IDSOLICITUD) 
		VALUES('$nombre','$cantidad','$unitario','$total','$medida','$solicitud')";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>