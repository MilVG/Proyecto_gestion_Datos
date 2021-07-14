
<?php 
require_once("conexionsql.php");
$sql = "SELECT * FROM SOLICITUDES";
$rs = $cnx->query($sql) or die("error $sql");

$resultado="";
while($reg = $rs->fetchObject()){
	$resultado.="<tr>
					<td>$reg->ID</td>
					<td>$reg->IDRESPONSBLE</td>
					<td>$reg->FECHA</td>
					<td>$reg->CENTRO_COSTOS</td>
					<td>$reg->RUBRO_PRESUPUESTAL</td>
					<td>$reg->COL_STATUS</td>
					<td>

						<button class='btn btn-info' type='button' onclick='editar($reg->ID)'>Editar</button>
						<button class='btn btn-danger' type='button' onclick='eliminar($reg->ID)'>Eliminar</button>
						
						<button name='veri' id='veri' class='btn btn-success' type='button' value='$reg->COL_STATUS' onchange='' onclick='bloq()'>ORDEN</button>
						
					</td>
				</tr>
				";
}

echo $resultado;
?>
