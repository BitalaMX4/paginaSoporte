function enviarMensaje() {
  var nombre = document.getElementById('nombre').value;
  var tipo = document.getElementById('tipo-aplicacion').value;
  var correo = document.getElementById('email').value;
  var mensaje = document.getElementById('mensaje').value;

  if (validarCampos()) {
    $.ajax({
      url: "controllers/Controller.php",
      type: "POST",
      data: {
        method: "POST",
        opcion: "EnviarMensaje",
        nombre: nombre,
        tipo: tipo,
        correo_cliente: correo,
        mensaje: mensaje
      },
      success: function (response) {
        swal("¡Mensaje enviado!", "El mensaje se ha enviado correctamente.", "success");
        $("#nombre, #tipo-aplicacion, #email, #mensaje").val('');

      },
      error: function (error) {
        swal("¡Error!", "No se pudo enviar el mensaje. Por favor, inténtalo de nuevo más tarde.", "error");
      }
    });
  } else {
    swal("¡Error!", "Por favor, completa todos los campos.", "error");
  }
}

$(document).ready(function() {
  $('#formulario').submit(function(event) {
    event.preventDefault();
    if (validarCampos()) {
      enviarMensaje();
    }
  });
});



function validarCampos() {
    var nombre = $("#nombre").val();
    var tipo = $("#tipo-aplicacion").val();
    var correo_cliente = $("#email").val();
    var mensaje = $("#mensaje").val();

    return (nombre !== '' && tipo !== null && correo_cliente !== '' && mensaje !== '');
}


function obtenerRegistros() {
    $.ajax({
      url: "../controllers/Controller.php",
      type: "POST",
      data: {
        method: "POST",
        opcion: "ObtenerRegistros",
      },
      success: function (response) {
        var registros = JSON.parse(response);
  
        var table = $('#myTable').DataTable();
  
        table.clear();
  
        registros.forEach(function(registro) {
          table.row.add([
            registro.id_entrada,
            registro.nombre,
            registro.tipo_aplicacion,
            registro.correo_cliente,
            registro.mensaje,
          ]);
        });
        table.column(0).visible(false);
        table.order([0, 'desc']).draw();
      },
      error: function (error) {
        console.error("Error al obtener los registros", error);
      }
    });
  }
