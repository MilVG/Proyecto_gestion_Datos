<?php 
require_once("conexionsql.php");
$ID = $_POST['id'];
$FECHA = $_POST['fecha'];
$CENC = $_POST['centrocos'];
$RUNPRE = $_POST['rubropro'];
$sql="INSERT INTO SOLICITUDES (IDRESPONSBLE,FECHA,CENTRO_COSTOS,RUBRO_PRESUPUESTAL) 
		VALUES('$ID','$FECHA','$CENC','$RUNPRE')";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>