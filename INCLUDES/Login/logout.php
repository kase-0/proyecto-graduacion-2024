<?php
session_start();
session_destroy();
header("Location: ../../VIEWS/Login/index.php");
?>