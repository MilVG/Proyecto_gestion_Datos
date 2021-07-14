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

function guardarbienes() {
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

function nuevobienes() {
    $("#txtid").val("");
    $("#txtnombrebien").val("");
    $("#txtcantidad").val("");
    $("#txtunitario").val("");
    $("#txtotal").val("");
    $("#txtmedida").val("");
    $("#txtsolicitud").val("");
  $("#modalbienes").modal("show");
}
