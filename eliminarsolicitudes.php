<?php 
require_once("conexionsql.php");
$id = $_POST['id'];
$sql="DELETE FROM SOLICITUDES WHERE ID=$id";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>