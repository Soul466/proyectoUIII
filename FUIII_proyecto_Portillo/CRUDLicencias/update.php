<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$TipoLic=$_POST['TipoLic'];
$FechaNac=$_POST['FechaNac'];
$FechaVig=$_POST['FechaVig'];
$Costo=$_POST['Costo'];

$sql="UPDATE `licencias` SET `id`='$id',`TipoLic`='$TipoLic',`FechaNac`='$FechaNac',`FechaVig`='$FechaVig',`Costo`='$Costo' WHERE 1";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: licencias.php");
    }
?>