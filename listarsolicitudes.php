
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
							
							<button name='veri' id='veri$reg->ID' class='btn btn-success item' type='button' value='$reg->COL_STATUS' onchange='' onclick='bloq()'>ORDEN</button>
							
						</td>
					</tr>
					";
	}

	echo $resultado;
	?>

<script type="text/javascript">
function bloq(){
  var divcontent = document.getElementsByClassName('prueba');
  var divfiltro = divcontent[0].getElementsByClassName('item');

  for (let index = 0; index < divfiltro.length; index++) {
      divfiltro[index].addEventListener("click", function() {
          let idItem = $(this).attr('id');              
        var st=$("#"+idItem+"").val();
	   if(st==0){
		$("#"+idItem+"").prop('disabled',true);
	   }else{
		$("#"+idItem+"").prop('disabled',false);  
	   }

		  
      });
  }
}
</script>