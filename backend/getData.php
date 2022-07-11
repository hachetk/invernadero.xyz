<?php

include './connect.php';

$con=conectar();
$json=array();
$query = "SELECT * FROM variableambiente WHERE ID_VARIABLEAMBIENTE= '1' ";
$results = mysqli_query($con, $query);
    
if($data=mysqli_fetch_array($results)){
    $result["TEMPERATURA"]=$data['TEMPERATURA'];
    $result["HUMEDAD"]=$data['HUMEDAD'];

    $json=$result;
}else{
    $result["TEMPERATURA"]='0';
    $result["HUMEDAD"]='0';
    $json=$result;
}

$query = "SELECT * FROM variablegas WHERE ID_VARIABLEGAS= '1' ";
$results = mysqli_query($con, $query);
    
if($data=mysqli_fetch_array($results)){
    $result["GAS"]=$data['PPM'];
    $json=$result;
}else{
    $result["GAS"]='0';
    $json=$result;
}
$query = "SELECT * FROM variableagua WHERE ID_VARIABLEAGUA= '1' ";
$results = mysqli_query($con, $query);
    
if($data=mysqli_fetch_array($results)){
    $result["AGUA"]=$data['TEMPERATURAAGUA'];
    $json=$result;
}else{
    $result["GAS"]='0';
    $json=$result;
}
mysqli_close($con);
echo json_encode($json);


?>