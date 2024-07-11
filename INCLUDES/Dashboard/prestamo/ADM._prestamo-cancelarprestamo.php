<?php
include('../../Conexion/conexion.php');
session_start();


if (empty($_SESSION['id_user'])) {

    header("Location: ../../VIEWS/Login/index.php");
}

//--------------------------------------------------------------------------------------------------

$codigo_carnet = $_GET['id_estudiante'];
$codigo_herramienta = $_GET['id_herramienta'];

if (isset($codigo_carnet) && isset($codigo_herramienta)) {

    $sql_estudiantes = $conexion->query("UPDATE estudiantes SET prestado_bool = '1' WHERE codigo_carnet = '$codigo_carnet'");
    $sql_prestamos = $conexion->query("DELETE FROM prestamos WHERE codigo_estudiante ='$codigo_carnet'");
    $sql_herramientas_stockactual = $conexion->query("SELECT stockdisponible_herramienta FROM herramientas WHERE codigo_herramienta = '$codigo_herramienta'");

    $row = $sql_herramientas_stockactual->fetch_assoc();
    $stock_disponible = $row["stockdisponible_herramienta"];

    $stock_disponible_nuevo = $stock_disponible + 1;

    $update_stock = $conexion->query("UPDATE herramientas SET stockdisponible_herramienta = '$stock_disponible_nuevo' WHERE codigo_herramienta = '$codigo_herramienta'");

    if ($sql_estudiantes > 0 && $sql_prestamos > 0) {
        $_SESSION['alerta'] = array(
            'icon' => 'success',
            'title' => 'PRÉSTAMO FINALIZADO',
            'text' => '¡Se ha finalizado el préstamo exitosamente!'
        );
        header('Location: ../../../VIEWS/Dashboard/prestamo/ADM._prestamo.php');
    } else {
        $_SESSION['alerta'] = array(
            'icon' => 'error',
            'title' => 'OOPS',
            'text' => '¡No se logro finalizar el préstamo!'
        );
        header('Location: ../../../VIEWS/Dashboard/prestamo/ADM._prestamo.php');
    }
} else {
    $_SESSION['alerta'] = array(
        'icon' => 'error',
        'title' => 'OOPS',
        'text' => '¡Error al tratar de finalizar el préstamo!'
    );
    header('Location: ../../../VIEWS/Dashboard/prestamo/ADM._prestamo.php');
}
