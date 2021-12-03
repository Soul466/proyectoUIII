<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT `id`, `TipoLic`, `FechaNac`, `FechaVig`, `Costo` FROM `licencias` WHERE 1";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="TipoLic" placeholder="TipoLic">
                                    <input type="text" class="form-control mb-3" name="FechaNac" placeholder="FechaNac">
                                    <input type="text" class="form-control mb-3" name="FechaVig" placeholder="FechaVig">
                                    <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo">
                                    

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/FUIII_proyecto_Portillo/index.php">Inicio </a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>TipoLic</th>
                                        <th>FechaNac</th>
                                        <th>FechaVig</th>
                                        <th>Costo</th>
                                       
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['TipoLic']?></th>
                                                <th><?php  echo $row['FechaNac']?></th>
                                                <th><?php  echo $row['FechaVig']?></th>  
                                                <th><?php  echo $row['Costo']?></th>
                                                  
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                       
                                                    
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>