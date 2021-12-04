<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Placa=$_POST['Placa'];
$Estado=$_POST['Estado'];
$Codigo=$_POST['Codigo'];
$Seguro=$_POST['Seguro'];


$sql="INSERT INTO `autos`(`id`, `Placa`, `Estado`, `Codigo`, `Seguro`) VALUES ('$id','$Placa','$Estado','$Codigo','$Seguro')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: autos.php");
    
}else {
}
?>