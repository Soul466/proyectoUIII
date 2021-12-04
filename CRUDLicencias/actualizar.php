<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT `id`, `TipoLic`, `FechaNac`, `FechaVig`, `Costo` FROM `licencias` WHERE id='$id'";
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
                                <input type="text" class="form-control mb-3" name="TipoLic" placeholder="TipoLic" value="<?php echo $row['TipoLic']  ?>">
                                <input type="text" class="form-control mb-3" name="FechaNac" placeholder="FechaNac" value="<?php echo $row['FechaNac']  ?>">
                                <input type="text" class="form-control mb-3" name="FechaVig" placeholder="FechaVig" value="<?php echo $row['FechaVig']  ?>">
                                <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo" value="<?php echo $row['Costo']  ?>">
                                

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>