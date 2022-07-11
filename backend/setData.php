<?php 

    include './connect.php';
     $con=conectar();

    $temperatura = $_POST["temperatura"];
    $humedad = $_POST["humedad"];
    $gas = $_POST["gas"];
    $agua = $_POST["agua"];

    $result=$con->query("UPDATE variableambiente SET  TEMPERATURA='$temperatura',HUMEDAD='$humedad' WHERE ID_VARIABLEAMBIENTE=1");
    
    $result=$con->query("UPDATE variablegas SET PPM=$gas WHERE ID_VARIABLEGAS=1");
    mysqli_close($con);
   
