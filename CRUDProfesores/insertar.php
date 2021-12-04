<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Matricula=$_POST['Matricula'];


$sql="INSERT INTO `profesores`(`id`, `Nombre`, `Apellidos`, `Telefono`, `Matricula`) VALUES ('$id','$Nombre','$Apellidos','$Telefono','$Matricula')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: profesores.php");
    
}else {
}
?>