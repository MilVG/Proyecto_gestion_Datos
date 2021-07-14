<?php 
require_once("conexionsql.php");
$IDSOLI =$_POST['ids'];
$ID = $_POST['id'];
$FECHA = $_POST['fecha'];
$CENC = $_POST['centrocos'];
$RUNPRE = $_POST['rubropro'];
$sql="UPDATE SOLICITUDES SET IDRESPONSBLE='$ID',FECHA='$FECHA',CENTRO_COSTOS='$CENC',RUBRO_PRESUPUESTAL='$RUNPRE' WHERE ID=$IDSOLI";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>