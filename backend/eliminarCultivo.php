<?php
    include ('./connect.php');
    $con=conectar();
    
    $ID_CULTIVO=$_GET['id'];
    $query = mysqli_query($con, "DELETE FROM cultivo WHERE ID_CULTIVO='$ID_CULTIVO'");
    if ($query) {
        Header("Location: ../cultivo2.php");
    };
?>
