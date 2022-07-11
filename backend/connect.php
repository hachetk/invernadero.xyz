<?php 

    function conectar(){
        $hostname ="localhost:3306";
        $database ="proye364_invernadero1";
        $username ="proye364_nicolas";
        $password ="nicolas1";
        $con= mysqli_connect($hostname,$username,$password);
        mysqli_select_db($con,$database);
        return $con;
    };
?>