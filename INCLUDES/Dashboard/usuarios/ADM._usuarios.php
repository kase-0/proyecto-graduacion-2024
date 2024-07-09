<?php
include("../../../INCLUDES/Conexion/conexion.php");
session_start();
// _____________________________________


if (isset($_POST["agregar_usuario"])) {
    if (empty($_POST["name"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["c_password"]) || empty($_POST["rol"]) || empty($_POST["estado"])) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS',
            'text' => '¡Completa todos los campos!'
        );

        header("Location: ../../../VIEWS/Dashboard/usuarios/ADM._usuarios.php");
    } else {
        $nombre = trim(mysqli_real_escape_string($conexion, $_POST['name']));
        $apellido = trim(mysqli_real_escape_string($conexion, $_POST['lastname']));
        $correo = trim(mysqli_real_escape_string($conexion, $_POST['email']));
        $usuario = trim(mysqli_real_escape_string($conexion, $_POST['username']));
        $pass = trim(mysqli_real_escape_string($conexion, $_POST['password']));
        $c_pass = trim(mysqli_real_escape_string($conexion, $_POST['c_password']));
        $rol = trim(mysqli_real_escape_string($conexion, $_POST['rol']));
        $estado = trim(mysqli_real_escape_string($conexion, $_POST['estado']));;

        if ($pass == $c_pass) {
            $sql = $conexion->query("INSERT INTO usuarios(nombre,apellido,usuario,correo_electronico,contrasenia,rol,estado) VALUES('$nombre','$apellido','$usuario','$correo','$pass','$rol','$estado')");
            if ($sql > 0) {

                $_SESSION['alerta'] = array(
                    'icon' => 'success',
                    'title' => 'REGISTRO EXITOSO',
                    'text' => '¡El usuario de ha agregado correctamente!'
                );
                header("Location: ../../../VIEWS/Dashboard/usuarios/ADM._usuarios.php");
            } else {

                $_SESSION['alerta'] = array(
                    'icon' => 'error',
                    'title' => 'REGISTRO FALLIDO',
                    'text' => '¡Hubo un error al agregar el usuario!'
                );
                header("Location: ../../../VIEWS/Dashboard/usuarios/ADM._usuarios.php");
            }
        } else {

            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'OOPS',
                'text' => '¡Las contraseñas no coinciden!'
            );
            header("Location: ../../../VIEWS/Dashboard/usuarios/ADM._usuarios.php");
        }
    }
}
