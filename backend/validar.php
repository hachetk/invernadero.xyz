<?php
include ('./connect.php');
$con=conectar();

session_start();
if(isset($_SESSION['nombreUsuario'])){

    Header('Location: https://proyectosw.cl/dashboardLechuga.php');
}

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];


$consulta="SELECT * FROM usuario where RUT = '$usuario' and PASSWORD = '$pass'";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);


$msjError = "Las credenciales no son correctas";

if(!isset($_SESSION['nombreUsuario']))
{


    if($filas==1){    
        $_SESSION['nombreUsuario']=$usuario;
        Header('Location: https://proyectosw.cl/dashboardLechuga.php');
    }
    else if($filas==0){
        
        header("location: https://proyectosw.cl/login.php?varerror=$msjError");
    }
}
mysqli_free_result($resultado);
mysqli_close($con);
