<?php 
session_start();
if(isset($_SESSION['nombreUsuario'])){
    Header('Location: https://proyectosw.cl/dashboardLechuga.php');
}
else{


?>
<!DOCTYPE html>

<html lang="es">



<head>

    

    <meta http-equiv=§Content-Type§ content=§text/html; charset=ISO-8859-1∪ />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Login </title>

    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="css/estilos2.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 

    <meta charset="UTF-8">





</head>



<body >



    <form action="https://proyectosw.cl/backend/validar.php" class="form" method="POST">

        <h2>Iniciar Sesión</h2>

        <p type="Rut:"><input type="text" placeholder="Ingrese Rut" name="usuario" id="usuario"></p>

        <p type="Contraseña:"><input type="password" placeholder="Ingrese Clave" name="pass" id="pass"></p>

        <input class="button btn btn-primary" name="submit" type="submit" value="Ingresar ">

        <?php

        if($_GET){

            $c = $_GET["varerror"];

            echo ("<p>$c</p>");

        }



        ?>

    </form>



</body>

</html>

<?php 
}
?>