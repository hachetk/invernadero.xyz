<?php
    include ('./connect.php');
    $con=conectar();

    $DateAndTime = date('m-d-Y h:i:s');
    $TEMPERATURAMAX = $_POST['TEMPERATURAMAX'];
    $TEMPERATURAMIN = $_POST['TEMPERATURAMIN'];
    $HUMEDADMAX = $_POST['HUMEDADMAX'];
    $HUMEDADMIN = $_POST['HUMEDADMIN'];
    $TEMPERATURAAGUAMAX = $_POST['TEMPERATURAAGUAMAX'];
    $TEMPERATURAAGUAMIN = $_POST['TEMPERATURAAGUAMIN'];
    $CO2MAX = $_POST['CO2MAX'];
    $CO2MIN = $_POST['CO2MIN'];
    $ID_INVERNADERO = $_POST['ID_INVERNADERO'];
    $NOMBRE = $_POST['NOMBRE'];
    
    $sql="INSERT INTO `cultivo` (`NOMBRE`,`TEMPERATURAMAX`, `TEMPERATURAMIN`, `HUMEDADMAX`, `HUMEDADMIN`, `TEMPERATURAAGUAMAX`, `TEMPERATURAAGUAMIN`, `CO2MAX`, `CO2MIN`, `ID_INVERNADERO`,`FECHA`) VALUES ('$NOMBRE', '$TEMPERATURAMAX', '$TEMPERATURAMIN', '$HUMEDADMAX', '$HUMEDADMIN', '$TEMPERATURAAGUAMAX', '$TEMPERATURAAGUAMIN', '$CO2MAX','$CO2MIN','$ID_INVERNADERO','$DateAndTime')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        Header("Location: https://proyectosw.cl/cultivo2.php");
    };


?>