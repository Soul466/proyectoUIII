<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Matricula=$_POST['Matricula'];

$sql="UPDATE `profesores` SET `id`='$id',`Nombre`='$Nombre',`Apellidos`='$Apellidos',`Telefono`='$Telefono',`Matricula`='$Matricula' WHERE 1";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesores.php");
    }
?>