<?php 
    include("conection_t.php");
    $con=conection_t();

$id2=$_GET['id'];

$sql="SELECT * FROM teachers WHERE id_teacher='$id2'";
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
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update_t.php" method="POST">
                    
                                <input type="hidden" name="id_teacher" value="<?php echo $row['id_teacher']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="t_names" placeholder="Nombres" value="<?php echo $row['t_names']  ?>">
                                <input type="text" class="form-control mb-3" name="t_lastnames" placeholder="Apellidos" value="<?php echo $row['t_lastnames']  ?>">
                                
                            <input type="submit" class="btn btn-info btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>