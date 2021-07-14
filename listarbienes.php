<?php 
require_once("conexionsql.php");
$sql = "SELECT * FROM ITEMS";
$rs = $cnx->query($sql) or die("error $sql");

$resultado="";
while($reg = $rs->fetchObject()){
	$resultado.="<tr>
					<td>$reg->ID</td>
					<td>$reg->NOMBREBIEN</td>
					<td>$reg->CANTIDAD</td>
					<td>$reg->VALOR_UNIDAD</td>
                    <td>$reg->VALORTOTAL</td>
                    <td>$reg->UNIDAD_MEDIDA</td>
                    <td>$reg->IDSOLICITUD</td>
					<td>

						<button class='btn btn-info' type='button' onclick='editar()'>Editar</button>
						<button class='btn btn-danger' type='button' onclick='eliminar()'>Eliminar</button>
						
					</td>
				</tr>
				";
}

echo $resultado;
?>