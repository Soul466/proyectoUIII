<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT `id`, `Matricula`, `Telefono`, `Seguro`, `Curp` FROM `alumnos` WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                    <input type="text" class="form-control mb-3" name="id" placeholder="Nombre" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Matricula" placeholder="Matricula" value="<?php echo $row['Matricula']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="Seguro" placeholder="Seguro" value="<?php echo $row['Seguro']  ?>">
                                <input type="text" class="form-control mb-3" name="Curp" placeholder="Curp" value="<?php echo $row['Curp']  ?>">
                                

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>