<?php
    include ('./connect.php');
    $con=conectar();
    
    $ID_INVERNADERO=$_GET['id'];
    $query = mysqli_query($con, "DELETE FROM invernadero WHERE ID_INVERNADERO='$ID_INVERNADERO'");
    if ($query) {
        Header("Location: ../invernadero.php");
    };
?>
