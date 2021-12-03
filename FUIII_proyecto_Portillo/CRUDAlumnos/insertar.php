<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Matricula=$_POST['Matricula'];
$Telefono=$_POST['Telefono'];
$Seguro=$_POST['Seguro'];
$Curp=$_POST['Curp'];


$sql="INSERT INTO `alumnos`(`id`, `Matricula`, `Telefono`, `Seguro`, `Curp`) VALUES ('$id','$Matricula','$Telefono','$Seguro','$Curp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>