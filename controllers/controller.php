<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $opcion = $_POST["opcion"];
    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $correo_cliente = $_POST["correo_cliente"];
    $mensaje = $_POST["mensaje"];

    $data = array(
        "opcion" => $opcion,
        "nombre" => $nombre,
        "tipo" => $tipo,
        "correo_cliente" => $correo_cliente,
        "mensaje" => $mensaje
    );

    $api_url = "http://ubiexpress.net:5610/apisoporteBitala/apiback.php";
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
}
?>
