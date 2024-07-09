<?php
include("configuracion.php");
$conexion = new mysqli($host, $username, $password, $dbname);
if ($conexion->connect_error) {
    die("Connection Failed " . $conexion->connect_error);
} //else{
//    echo '<marquee>CONNECTED</marquee>';
// }

?>