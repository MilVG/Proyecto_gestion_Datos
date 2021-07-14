<?php 
require_once("conexionsql.php");
$IDSOLI =$_POST['idb'];
$NOMBRE = $_POST['nombre'];
$CANTIDAD = $_POST['cantidad'];
$VALORU = $_POST['unitario'];
$VALORT = $_POST['total'];
$UNIDADM = $_POST['medida'];
$IDSOLICITUD = $_POST['solicitud'];
$sql="UPDATE ITEMS SET NOMBREBIEN='$NOMBRE',CANTIDAD='$CANTIDAD',VALOR_UNIDAD='$VALORU',VALORTOTAL='$VALORT',UNIDAD_MEDIDA='$UNIDADM',IDSOLICITUD='$IDSOLICITUD' WHERE ID=$IDSOLI";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>