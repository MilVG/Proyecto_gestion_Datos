
function listar() {
    $.ajax({
      url: "nuevousuario.php",
      type: "post",
      data: {},
      success: function (data) {
        console.log(data);
        $("#registros").html(data);
      },
    });
  }

  function guardar() {;
    var nombre = $("#nombres").val();
    var rol = $("#rol").val();
    var cedula = $("#cedula").val();
  
      $.ajax({
        url: "insertUser.php",
        type: "post",
        data: {"nombres": nombre,"rol": rol,"cedula": cedula,
        },
        success: function (data) {
            console.log(data);
            // listar();
        //   $("#modalfrm").modal("hide");
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
  