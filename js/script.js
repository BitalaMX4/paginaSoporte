$(document).ready(function() {
    $("#formulario").submit(function(event) {
        event.preventDefault();

        if (validarCampos()) {
            var opcion = "1";
            var nombre = $("#nombre").val();
            var tipo = $("#tipo-aplicacion").val();
            var correo_cliente = $("#email").val();
            var mensaje = $("#mensaje").val();

            $.post("controller.php", {
                opcion: opcion,
                nombre: nombre,
                tipo: tipo,
                correo_cliente: correo_cliente,
                mensaje: mensaje
            }, function(data) {

                if (data.trim() === "exito") {
                    swal("¡Mensaje Enviado!", "Nos pondremos en contacto contigo lo más pronto posible.", "success");

                    $("#formulario")[0].reset();
                } else {
                    swal("¡Error!", "Lo sentimos, no se pudo enviar el mensaje. Inténtelo más tarde.", "error");
                }
            });
        } else {
            swal("¡Error!", "Por favor, complete todos los campos.", "error");
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
