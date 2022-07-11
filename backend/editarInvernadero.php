<?php
    include ('./connect.php');
    $con=conectar();

    $RUT = '19690677-0'; 
    $ID_INVERNADERO=$_POST['ID_INVERNADERO'];
    $NOMBRE = $_POST['NOMBRE'];
    $UBICACION = $_POST['UBICACION'];
    $CAPACIDADCULTIVO = $_POST['CAPACIDADCULTIVO'];
    $FECHA = '2022-06-28 00:51:47';
    
    $sql="UPDATE invernadero SET  RUT='19825054-6', NOMBRE='$NOMBRE', UBICACION='$UBICACION', CAPACIDADCULTIVO='$CAPACIDADCULTIVO', FECHA='2022-06-28 03:02:02' WHERE ID_INVERNADERO='$ID_INVERNADERO' ";
    $query = mysqli_query($con, $sql);
    if ($query) {
        Header("Location: https://proyectosw.cl/invernadero.php");
    };
    
?>
