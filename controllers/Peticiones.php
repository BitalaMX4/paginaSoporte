<?php

class Peticiones
{
    private $url;

    public function __construct()
    {
        $this->url = "http://ubiexpress.net:5610/apisoporteBitala/apiback.php";
    }

    public function enviarMensaje($opcion, $nombre, $tipo, $correo_cliente, $mensaje)
    {
        $ch = curl_init();
        $data = array(
            'opcion' => $opcion,
            'nombre' => $nombre,
            'tipo' => $tipo,
            'correo_cliente' => $correo_cliente,
            'mensaje' => $mensaje,
        );
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function login($opcion, $correo, $pass) {
        $ch = curl_init();
        $data = array(
            'opcion' => $opcion,
            'correo' => $correo,
            'pass' => $pass,
        );
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    

    public function obtenerRegistros($opcion)
    {
        $ch = curl_init();
        $data = array(
            'opcion' => $opcion,
        );
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
