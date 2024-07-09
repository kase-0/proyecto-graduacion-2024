<?php

include("../../Conexion/conexion.php");

$codigo = $_GET['codigo'] ?? '';

if ($codigo) {

    $sql = $conexion->query("SELECT * FROM herramientas WHERE codigo_herramienta = '$codigo'");

    if (($sql->num_rows > 0)) {
        $datos = $sql->fetch_array();

        $nombre_herramienta = $datos['nombre_herramienta'];
        $categoria_herramienta = $datos['categoria_herramienta'];
        $precio_herramienta = $datos['precio_herramienta'];
        $stockdisponible_herramienta = $datos['stockdisponible_herramienta'];

        $arraydatos_herramientas = [

            'nombre' => $nombre_herramienta,
            'categoria' => $categoria_herramienta,
            'precio' => $precio_herramienta,
            'stockdisponible' => $stockdisponible_herramienta

        ];

        if ($datos) {
            header('Content-Type: application/json');
            echo json_encode($arraydatos_herramientas);
        } else {
            echo json_encode(array('error' => 'No data found'));
        }
    } else {
        echo json_encode(array('error' => 'No data found'));
    }
} else {
    echo "error";
}
