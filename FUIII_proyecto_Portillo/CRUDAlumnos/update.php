<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Matricula=$_POST['Matricula'];
$Telefono=$_POST['Telefono'];
$Seguro=$_POST['Seguro'];
$Curp=$_POST['Curp'];

$sql="UPDATE `alumnos` SET `id`='$id',`Matricula`='$Matricula',`Telefono`='$Telefono',`Seguro`='$Seguro',`Curp`='$Curp' WHERE 1";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>