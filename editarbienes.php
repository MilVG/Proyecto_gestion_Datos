<?php 
require_once("conexionsql.php");
$id = $_POST['id'];
$sql="SELECT * FROM ITEMS WHERE ID=$id";
$rs=$cnx->query($sql) or die("error $sql");
$reg=$rs->fetchObject();
echo json_encode($reg);
 ?>