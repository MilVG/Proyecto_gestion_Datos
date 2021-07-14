<?php 
require_once("conexionsql.php");
$ID = $_POST['id'];
$FECHA = $_POST['fecha'];
$CENC = $_POST['centrocos'];
$RUNPRE = $_POST['rubropro'];
$VERI = $_POST['verificacion'];
$sql="INSERT INTO SOLICITUDES (IDRESPONSBLE,FECHA,CENTRO_COSTOS,RUBRO_PRESUPUESTAL,COL_STATUS) 
		VALUES('$ID','$FECHA','$CENC','$RUNPRE','$VERI')";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>