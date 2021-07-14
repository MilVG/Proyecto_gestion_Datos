<?php 
require_once("conexionsql.php");
$sql = "SELECT * FROM SOLICITUDES";
$rs = $cnx->query($sql) or die("error $sql");

$resultado="";
while($reg = $rs->fetchObject()){
	$resultado.="<tr>
					<td>$reg->IDRESPONSBLE</td>
					<td>$reg->FECHA</td>
					<td>$reg->CENTRO_COSTOS</td>
					<td>$reg->RUBRO_PRESUPUESTAL</td>
					<td>

						<button class='btn btn-info'>Editar</butoon>
						
					</td>
				</tr>
				";
}

echo $resultado;
?>