<?php 
session_start();
session_destroy();
header("location: /proyectoJL/login.php");
?>