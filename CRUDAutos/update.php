<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Placa=$_POST['Placa'];
$Estado=$_POST['Estado'];
$Codigo=$_POST['Codigo'];
$Seguro=$_POST['Seguro'];



$sql="UPDATE `autos` SET `id`='$id',`Placa`='$Placa',`Estado`='$Estado',`Codigo`='$Codigo',`Seguro`='$Seguro' WHERE 1";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: autos.php");
    }
?>