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
function insertar() {
  var id = $("#txtid").val();
  var fecha = $("#txtfecha").val();
  var centrocos = $("#txtcencos").val();
  var rubropro = $("#txtrubpre").val();

  $.ajax({
    url: "insertsolicitudes.php",
    type: "post",
    data: { id: id, fecha: fecha, centrocos: centrocos, rubropro: rubropro },
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
    data: { id: id },
    success: function (data) {
      console.log(data);
      listar();
      listarbienes();
    },
  });
}
function editar(id) {
  $.ajax({
    url: "editarsolicitudes.php",
    type: "post",
    data: { id: id },
    success: function (data) {
      console.log(data);
      var datos = JSON.parse(data);
      $("#idsoli").val(datos.ID);
      $("#txtid").val(datos.IDRESPONSBLE);
      $("#txtfecha").val(datos.FECHA);
      $("#txtcencos").val(datos.CENTRO_COSTOS);
      $("#txtrubpre").val(datos.RUBRO_PRESUPUESTAL);
      $("#modalfrm").modal("show");
    },
  });
}
function actualizar() {
  var ids = $("#idsoli").val();
  var id = $("#txtid").val();
  var fecha = $("#txtfecha").val();
  var centrocos = $("#txtcencos").val();
  var rubropro = $("#txtrubpre").val();

  $.ajax({
    url: "actualizarsolicitudes.php",
    type: "post",
    data: {
      ids: ids,
      id: id,
      fecha: fecha,
      centrocos: centrocos,
      rubropro: rubropro,
    },
    success: function (data) {
      console.log(data);
      listar();
      $("#modalfrm").modal("hide");
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

function guardar() {
  var idsoli = $("#idsoli").val();
  if (idsoli > 0) {
    actualizar();
  } else {
    insertar();
  }
}
