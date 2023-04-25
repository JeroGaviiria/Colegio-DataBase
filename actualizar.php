<?php 
    include("conection.php");
    $con=conection();

$id=$_GET['id'];

$sql="SELECT * FROM students WHERE id_student='$id'";
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
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_student" value="<?php echo $row['id_student']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="ti" placeholder="Dni" value="<?php echo $row['ti']  ?>">
                                <input type="text" class="form-control mb-3" name="namess" placeholder="Nombres" value="<?php echo $row['namess']  ?>">
                                <input type="text" class="form-control mb-3" name="lastnames" placeholder="Apellidos" value="<?php echo $row['lastnames']  ?>">
                                
                            <input type="submit" class="btn btn-info btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>