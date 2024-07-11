<?php
include("../../../INCLUDES/Conexion/conexion.php");
session_start();

if (isset($_POST["generar_prestamo"])) {

    $codigo_herramienta = $_POST["codigo_herramienta"];
    $codigo_alumno = $_POST["codigo_alumno"];

    if (!empty($codigo_alumno) || !empty($codigo_herramienta)) {

        $sql = $conexion->query("SELECT * FROM herramientas WHERE codigo_herramienta = '$codigo_herramienta'");
        $sql2 = $conexion->query("SELECT * FROM estudiantes WHERE codigo_carnet = '$codigo_alumno'");

        if ($sql->num_rows > 0 || $sql2->num_rows > 0) {

            $datos_herramientas = $sql->fetch_array();
            $datos_alumno = $sql2->fetch_array();

            $codigo_Alumno = $datos_alumno["codigo_carnet"];
            $codigo_herramienta = $datos_herramientas["codigo_herramienta"];

            //STOCK

            $stock_disponible_sql = $conexion->query("SELECT stockdisponible_herramienta FROM herramientas WHERE codigo_herramienta = '$codigo_herramienta'");

            if ($stock_disponible_sql->num_rows > 0) {

                $row = $stock_disponible_sql->fetch_assoc();
                $stock_disponible = $row["stockdisponible_herramienta"];

                $stock_disponible_nuevo = $stock_disponible - 1;


                //PARA LOS ESTUDIANTES 1 = NO HA PRESTADO 2 = HA PRESTADO HERRAMIENTA

                $prestadocheck = $datos_alumno["prestado_bool"];

                if ($prestadocheck == 1) {
                    if ($stock_disponible > 0) {



                        $sql_insert_prestamos = $conexion->query("INSERT INTO prestamos (codigo_estudiante, codigo_herramienta) VALUES ('$codigo_Alumno', '$codigo_herramienta')");
                        $sql_actualizar_estado_alumno = $conexion->query("UPDATE estudiantes SET prestado_bool = '2' WHERE codigo_carnet = '$codigo_Alumno'");
                        $update_stock = $conexion->query("UPDATE herramientas SET stockdisponible_herramienta = '$stock_disponible_nuevo' WHERE codigo_herramienta = '$codigo_herramienta'");


                        if ($sql_insert_prestamos && $sql_actualizar_estado_alumno && $update_stock > 0) {
                            $_SESSION['alerta'] = array(
                                'icon' => 'success',
                                'title' => 'PRÉSTAMO EXITOSO',
                                'text' => '¡Se ha realizado el préstamo exitosamente!'
                            );

                            header("Location: ../../../VIEWS/Dashboard/prestamo/GEST._prestamo.php");
                        } else {
                            $_SESSION['alerta'] = array(
                                'icon' => 'error',
                                'title' => 'OOPS',
                                'text' => '¡No se logro procesar el préstamo!'
                            );

                            header("Location: ../../../VIEWS/Dashboard/prestamo/GEST._prestamo.php");
                        }
                    } else {
                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'OOPS',
                            'text' => '¡No hay stock disponible!'
                        );

                        header("Location: ../../../VIEWS/Dashboard/prestamo/GEST._prestamo.php");
                    }
                } else {
                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'OOPS',
                        'text' => '¡Parece tienes un préstamo vigente!'
                    );

                    header("Location: ../../../VIEWS/Dashboard/prestamo/GEST._prestamo.php");
                }
            }
        } else {
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'OOPS',
                'text' => '¡Código de carnet o herramienta no válido!'
            );

            header("Location: ../../../VIEWS/Dashboard/prestamo/GEST._prestamo.php");
        }
    }
}
