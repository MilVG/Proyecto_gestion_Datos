
function listar() {
  $.ajax({
    url: "listarsolicitudes.php",
    type: "post",
    data: {},
    success: function (data) {
      console.log(data);
      $("#registros").html(data);
    },
  });
}
function guardar() {
  var id = $("#txtid").val();
  var fecha = $("#txtfecha").val();
  var centrocos = $("#txtcencos").val();
  var rubropro = $("#txtrubpre").val();

    $.ajax({
      url: "insertsolicitudes.php",
      type: "post",
      data: {"id": id,"fecha": fecha,"centrocos": centrocos,"rubropro": rubropro,
      },
      success: function (data) {
          console.log(data);
          listar();
        $("#modalfrm").modal("hide");
      },
    });
  
}
function eliminar(id) {
  $.ajax({
    url: "eliminarsolicitudes.php",
    type: "post",
    data: { "id": id },
    success: function (data) {
      console.log(data);
        listar();
    },
  });
}

function nuevo() {
  $("#txtid").val("");
  $("#txtfecha").val("");
  $("#txtcencos").val("");
  $("#txtrubpre").val("");
  $("#modalfrm").modal("show");
}
