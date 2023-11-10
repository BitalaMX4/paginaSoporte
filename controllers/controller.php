<?php
require "Peticiones.php";

$controlador = new Peticiones();

switch ($_POST["opcion"]) {
    case 'EnviarMensaje':
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $correo_cliente = $_POST["correo_cliente"];
        $mensaje = $_POST["mensaje"];
        $response = $controlador->enviarMensaje('1', $nombre, $tipo, $correo_cliente, $mensaje);
        echo $response;
        break;
    case 'Login':
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];
        $response = $controlador->login('2', $correo, $pass);
        echo $response;
        break;
    case 'ObtenerRegistros':
        $response = $controlador->obtenerRegistros('3');
        echo $response;
        break;
}
?>
