<?php

include("../Conexion/conexion.php");

//-------------- REGISTRAR --------------
if (isset($_POST["registro"])) {

	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['user']) || empty($_POST['password']) || empty($_POST['repeatpassword'])) {
		echo "<script>
			alert('¡No deje campos vacíos!');
			window.location = '../../Views/login.php';
		</script>";
	} else {
		if ($_POST['password'] != $_POST['repeatpassword']) {
			echo "<script>
				alert('¡Las contraseñas no coinciden!');
				window.location = '../../Views/login.php';
			</script>";
		} else {
			$nombre = trim(mysqli_real_escape_string($conexion, $_POST['name']));
			$correo_electronico = trim(mysqli_real_escape_string($conexion, $_POST['email']));
			$usuario = trim(mysqli_real_escape_string($conexion, $_POST['user']));
			$contraseña = trim(mysqli_real_escape_string($conexion, $_POST['password']));
			$contraseña_encriptada = Trim(sha1($contraseña));
			$rol = 2;

			$sqluser = $conexion->query("SELECT ID_usuario FROM usuarios WHERE usuario = '$usuario'");
			$filasuser = $sqluser->num_rows;
			$sqlemail = $conexion->query("SELECT ID_usuario FROM usuarios WHERE correo_electronico = '$correo_electronico'");
			$filasemail = $sqlemail->num_rows;

			if ($filasuser > 0 && $filasemail > 0) {
				echo "<script>
						alert('El usuario $usuario y el correo electrónico $correo_electronico ya existen.');
						window.location = '../../Views/login.php';
					</script>";
			} elseif ($filasuser > 0) {
				echo "<script>
						alert('El usuario $usuario ya existe.');
						window.location = '../../Views/login.php';
					</script>";
			} elseif ($filasemail > 0) {
				echo "<script>
						alert('El correo electrónico $correo_electronico ya existe.');
						window.location = '../../Views/login.php';
					</script>";
			} else {
				$sql = $conexion->query("INSERT INTO usuarios(nombre,correo_electronico,usuario,contrasenia,rol) VALUES ('$nombre','$correo_electronico','$usuario','$contraseña_encriptada','$rol')");
				if ($sql > 0) {
					echo "<script>
						alert('Registro Exitoso');
						window.location = '../../Views/login.php';
					</script>";
				} else {
					echo "<script>
						alert('Error al registrarse');
						window.location = '../../Views/login.php';
					</script>";
				}
			}
		}
	}
}
