<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM `licencias` WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: licencias.php");
    }
?>
