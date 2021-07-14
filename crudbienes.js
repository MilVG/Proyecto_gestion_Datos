function listarbienes() {
  $.ajax({
    url: "listarbienes.php",
    type: "post",
    data: {},
    success: function (data) {
      console.log(data);
      $("#registrosbienes").html(data);
    },
  });
}

function insertarbienes() {
    var nombre = $("#txtnombrebien").val();
    var cantidad = $("#txtcantidad").val();
    var unitario = $("#txtunitario").val();
    var total = $("#txtotal").val();
    var medida = $("#txtmedida").val();
    var solicitud = $("#txtsolicitud").val();

  $.ajax({
    url: "insertbienes.php",
    type: "post",
    data: {"nombre": nombre, "cantidad": cantidad, "unitario": unitario,"total":total,"medida":medida,"solicitud":solicitud },
    success: function (data) {
      console.log(data);
      listarbienes();
      $("#modalbienes").modal("hide");
    },
  });
}
function eliminarbienes(id) {
  $.ajax({
    url: "eliminarbienes.php",
    type: "post",
    data: { id: id },
    success: function (data) {
      console.log(data);
      listarbienes();
      
    },
  });
}
function editarbienes(id) {
  $.ajax({
    url: "editarbienes.php",
    type: "post",
    data: { id: id },
    success: function (data) {
      console.log(data);
      var datos = JSON.parse(data);
      $("#idb").val(datos.ID);
      $("#txtnombrebien").val(datos.NOMBREBIEN);
      $("#txtcantidad").val(datos.CANTIDAD);
      $("#txtunitario").val(datos.VALOR_UNIDAD);
      $("#txtotal").val(datos.VALORTOTAL);
      $("#txtmedida").val(datos.UNIDAD_MEDIDA);
      $("#txtsolicitud").val(datos.IDSOLICITUD);
      $("#modalbienes").modal("show");
    },
  });
}
function actualizarbienes() {
  var idb = $("#idb").val();
  var nombre = $("#txtnombrebien").val();
  var cantidad = $("#txtcantidad").val();
  var unitario = $("#txtunitario").val();
  var total = $("#txttotal").val();
  var medida = $("#txtmedida").val();
  var solicitud = $("#txtsolicitud").val();

  $.ajax({
    url: "actualizarbienes.php",
    type: "post",
    data: {
      "idb": idb,
      "nombre": nombre,
      "cantidad": cantidad,
      "unitario": unitario,
      "total": total,
      "medida": medida,
      "solicitud": solicitud,
    },
    success: function (data) {
      console.log(data);
      listarbienes();
      $("#modalbienes").modal("hide");
    },
  });
}

function nuevobienes() {
    $("#txtid").val("");
    $("#txtnombrebien").val("");
    $("#txtcantidad").val("");
    $("#txtunitario").val("");
    $("#txttotal").val("");
    $("#txtmedida").val("");
    $("#txtsolicitud").val("");
  $("#modalbienes").modal("show");
}
function guardarbienes() {
  var idsoli = $("#idb").val();
  if (idsoli > 0) {
    actualizarbienes();
  } else {
    insertarbienes();
  }
}