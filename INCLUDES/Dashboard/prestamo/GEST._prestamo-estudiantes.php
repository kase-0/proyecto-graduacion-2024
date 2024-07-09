<?php

include("../../Conexion/conexion.php");

$codigo = $_GET['codigo'] ?? '';

if ($codigo) {

    $sql = $conexion->query("SELECT * FROM estudiantes WHERE codigo_carnet = '$codigo'");

    if (($sql->num_rows > 0)) {
        $datos = $sql->fetch_array();

        $nombre_alumno = $datos['nombre_estudiante'];
        $apellido_alumno = $datos['apellido_estudiante'];
        $grado_alumno = $datos['grado_estudiante'];
        $correo_alumno = $datos['correo_estudiante'];

        $arraydatos_alumno = [

            'nombre' => $nombre_alumno,
            'apellido' => $apellido_alumno,
            'correo' => $correo_alumno,
            'grado' => $grado_alumno

        ];

        if ($datos) {
            header('Content-Type: application/json');
            echo json_encode($arraydatos_alumno);
        } else {
            echo json_encode(array('error' => 'No data found'));
        }
    } else {
        echo json_encode(array('error' => 'No data found'));
    }
} else {
    echo "error";
}
