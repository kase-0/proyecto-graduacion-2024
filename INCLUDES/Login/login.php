<?php
include("../Conexion/conexion.php");
session_start();

//-------------- LOGIN --------------
if (isset($_POST["login"])) {

	if (empty($_POST['user']) && empty($_POST['password'])) {
		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Oops',
			'text' => '¡Completa todos los campos!'
		);

		header("Location: ../../VIEWS/Login/index.php");
	} elseif (empty($_POST['user'])) {
		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Oops',
			'text' => '¡Debe ingresar el Usuario!'
		);

		header("Location: ../../VIEWS/Login/index.php");
	} elseif (empty($_POST['password'])) {
		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Oops',
			'text' => '¡Debe ingresar la Contraseña!'
		);

		header("Location: ../../VIEWS/Login/index.php");
	} else {

		$usuario = trim(mysqli_real_escape_string($conexion, $_POST['user']));
		$contraseña = trim(mysqli_real_escape_string($conexion, $_POST['password']));
		$contraseña_encriptada = trim(sha1($contraseña));
		$sql = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contraseña'");
		$datos = $sql->fetch_array();

		if ($datos) {

			if ($datos['estado'] == "ACTIVO") {

				$_SESSION['id_user'] = $datos['id_usuario'];
				$_SESSION['id_rol'] = $datos['rol'];
				
				if ($datos['rol'] == 1) { //Super Administrador
					
					$_SESSION['id_user'] = $datos['id_usuario'];
					header("Location: ../../VIEWS/Dashboard/index.php");
					
				}elseif ($datos['rol'] == 2) { //Administrador
					
					$_SESSION['id_user'] = $datos['id_usuario'];
					header("Location: ../../VIEWS/Dashboard/index.php");
					
				}

			}elseif ($datos['estado'] == "INACTIVO") {

				$_SESSION['alerta'] = array(
					'icon' => 'error',
					'title' => 'Usuario Inhabilitado',
					'text' => '¡Su usuario está inhabilitado!'
				);
		
				header("Location: ../../VIEWS/Login/index.php");
			}
			
		} else {

			$_SESSION['alerta'] = array(
				'icon' => 'error',
				'title' => 'Oops',
				'text' => '¡Usuario o Contraseña Incorrecto!'
			);

			header("Location: ../../VIEWS/Login/index.php");
		}
	}
}
