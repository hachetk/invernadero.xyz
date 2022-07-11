<?php

session_start();
session_destroy();
header("location: https://proyectosw.cl/login.php");
?>