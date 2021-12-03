<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$TipoLic=$_POST['TipoLic'];
$FechaNac=$_POST['FechaNac'];
$FechaVig=$_POST['FechaVig'];
$Costo=$_POST['Costo'];


$sql="INSERT INTO `licencias`(`id`, `TipoLic`, `FechaNac`, `FechaVig`, `Costo`) VALUES ('$id','$TipoLic','$FechaNac','$FechaVig','$Costo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: licencias.php");
    
}else {
}
?>