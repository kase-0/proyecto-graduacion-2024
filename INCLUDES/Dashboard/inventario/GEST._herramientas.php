<?php
include("../../../INCLUDES/Conexion/conexion.php");
session_start();

// _____________________________________


if (isset($_POST["agregar_herramienta"])) {
    if (empty($_POST["nombre_herramienta"]) || empty($_POST["categoria_herramienta"]) || empty($_POST["codigo_herramienta"]) || empty($_POST["descripcion_herramienta"]) || empty($_POST["stocktotal_herramienta"]) || empty($_POST["precio_herramienta"])) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS',
            'text' => '¡Completa todos los campos!'
        );

        header("Location: ../../../VIEWS/Dashboard/inventario/GEST._herramientas.php");
    } else {


        $nombre_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['nombre_herramienta']));
        $categoria_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['categoria_herramienta']));
        $codigo_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['codigo_herramienta']));
        $stocktotal_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['stocktotal_herramienta']));
        $stockdisponible_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['stocktotal_herramienta']));
        $descripcion_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['descripcion_herramienta']));
        $precio_herramienta = trim(mysqli_real_escape_string($conexion, $_POST['precio_herramienta']));

        $sql = $conexion->query("INSERT INTO herramientas(codigo_herramienta,nombre_herramienta,categoria_herramienta,precio_herramienta,stocktotal_herramienta,stockdisponible_herramienta,descripcion_herramienta) VALUES ('$codigo_herramienta','$nombre_herramienta','$categoria_herramienta','$precio_herramienta','$stocktotal_herramienta','$stockdisponible_herramienta','$descripcion_herramienta')");

        if ($sql > 0) {

            $_SESSION['alerta'] = array(
                'icon' => 'success',
                'title' => 'REGISTRO EXITOSO',
                'text' => '¡La herramienta se agredo exitosamente!'
            );

            header("Location: ../../../VIEWS/Dashboard/inventario/GEST._herramientas.php");

            // $_SESSION['iziToast_alerta'] = array(
            //     'fuction' => 'mostrarMensaje()',
            //     'type' => 'success',
            //     'title' => 'ㅤSUCCESSㅤﾠ|ﾠ',
            //     'message' => 'Ticket added to cart!',
            //     'timeout' => '5000',
            //     'position' => 'topRight',
            //     'animateInside' => 'true',
            //     'rtl' => 'false',
            //     'pauseOnHover' => 'true',
            //     'resetOnHover' => 'false',
            //     'closeOnEscape' => 'false',
            //     'closeOnClick' => 'false',
            //     'transitionIn' => 'bounceInLeft',
            //     'transitionOut' => 'fadeOutRight',
            //     'transitionInMobile' => 'fadeInDown',
            //     'transitionOutMobile' => 'fadeOutUp',
            //     'progressBar' => 'true',
            //     'progressBarEasing' => 'linear'
            // );


            // $response = array(
            //     'type' => 'success',
            //     'title' => 'ㅤSUCCESSㅤﾠ|ﾠ',
            //     'message' => 'Ticket added to cart!',
            //     'timeout' => '5000',
            //     'position' => 'topRight',
            //     'animateInside' => 'true',
            //     'rtl' => 'false',
            //     'pauseOnHover' => 'true',
            //     'resetOnHover' => 'false',
            //     'closeOnEscape' => 'false',
            //     'closeOnClick' => 'false',
            //     'transitionIn' => 'bounceInLeft',
            //     'transitionOut' => 'fadeOutRight',
            //     'transitionInMobile' => 'fadeInDown',
            //     'transitionOutMobile' => 'fadeOutUp',
            //     'progressBar' => 'true',
            //     'progressBarEasing' => 'linear'
            // );

            // // Enviar la respuesta como JSON
            // header('Content-Type: application/json');
            // echo json_encode($response);

            // header("Location: ../../../VIEWS/Dashboard/inventario/GEST._herramientas.php");

        } else {


            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'REGISTRO FALLIDO',
                'text' => '¡Hubo un error al agregar la herramienta'
            );

            header("Location: ../../../VIEWS/Dashboard/inventario/GEST._herramientas.php");
            // <!-- <script>
            //     iziToast.success({
            //         title: 'ㅤSUCCESSㅤﾠ|ﾠ',
            //         message: 'Ticket added to cart!',
            //         timeout: 5000,
            //         position: 'topRight',
            //         animateInside: true,
            //         rtl: false,
            //         pauseOnHover: true,
            //         resetOnHover: false,
            //         closeOnEscape: false,
            //         closeOnClick: false,
            //         transitionIn: 'bounceInLeft',
            //         transitionOut: 'fadeOutRight',
            //         transitionInMobile: 'fadeInDown',
            //         transitionOutMobile: 'fadeOutUp',
            //         progressBar: true,
            //         progressBarEasing: 'linear'
            //     });
            // </script> -->
        }
    }
}
