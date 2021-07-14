<?php 
require_once("conexionsql.php");
$IDSOLI =$_POST['ids'];
$ID = $_POST['id'];
$FECHA = $_POST['fecha'];
$CENC = $_POST['centrocos'];
$RUNPRE = $_POST['rubropro'];
$VERI = $_POST['veri'];
$sql="UPDATE SOLICITUDES SET IDRESPONSBLE='$ID',FECHA='$FECHA',CENTRO_COSTOS='$CENC',RUBRO_PRESUPUESTAL='$RUNPRE',COL_STATUS='$VERI' WHERE ID=$IDSOLI";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>