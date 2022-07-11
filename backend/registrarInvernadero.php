<?php
    include ('./connect.php');
    $con=conectar();

    $RUT = '13529601-5'; 
    $NOMBRE = $_POST['NOMBRE'];
    $UBICACION = $_POST['UBICACION'];
    $CAPACIDADCULTIVO = $_POST['CAPACIDADCULTIVO'];
    $FECHA = '2022-06-28 00:51:47';
    
    $sql="INSERT INTO `invernadero` (`RUT`, `NOMBRE`, `UBICACION`, `CAPACIDADCULTIVO`, `FECHA`) VALUES ( '13529601-5', '$NOMBRE', '$UBICACION', '$CAPACIDADCULTIVO', '2022-06-28 03:02:02')";
    $query = mysqli_query($con, $sql); 
    if ($query) {
        Header("Location: https://proyectosw.cl/invernadero.php");
    };
    
?>
