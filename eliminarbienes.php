<?php 
require_once("conexionsql.php");
$id = $_POST['id'];
$sql="DELETE FROM ITEMS WHERE ID=$id";
$cnx->query($sql) or die("error $sql");
echo "ok";
 ?>