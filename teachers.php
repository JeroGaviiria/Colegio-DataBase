<?php
 include("conection_t.php");
$con=conection_t();

$sql = "SELECT * FROM teachers";
$query = mysqli_query($con,$sql);

$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Teacher</title>
</head>
<body>
<div class="container mt-5">

  <!-- Tabla de Profesores -->

  <div class="row mt-5" >
  <div class="col-md-3">
     <h1 class="text-light">Enter Data</h1>
     <form action="create_t.php" method="POST">
        <input type="text" class="form-control mb-3" name="id_teacher" placeholder="Teacher ID">
        <input type="text" class="form-control mb-3" name="dni" placeholder="DNI">
        <input type="text" class="form-control mb-3" name="t_name" placeholder="Teacher Name">
        <input type="text" class="form-control mb-3" name="t_lastnames" placeholder="Teacher Last Name">
        <input type="submit"class="btn btn-primary">

     </form>
    </div>
    <div class="col-md-8">
    <table class="table">
  <thead class="table-success table-striped">
    <tr>
      <th >Teacher ID</th>     
      <th >DNI</th>   
      <th >Teacher Name</th>   
      <th >Last Names</th> 
      <th ></th> 
      <th ></th>   
    </tr>
  </thead>

  <tbody>
    <?php
    while($row = mysqli_fetch_array($query)){
      ?>
  <tr>
      <th ><?php echo $row['id_teacher']?></th>   
      <th ><?php echo $row['dni']?></th>
      <th ><?php echo $row['t_names']?></th>   
      <th ><?php echo $row['t_lastnames']?></th>     
      <th><a href="actualizar_t.php?id=<?php echo $row['id_teacher'] ?>" class="btn btn-info">Editar</a></th> 
      <th><a href="delete_t.php?id=<?php echo $row['id_teacher'] ?>" class="btn btn-danger">Eliminar</a></th>    
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>  
    </div>
    <div class="col-sm-1">
    <a class="btn ml-2 btn-warning" href="./students.php" role="button">Go to Students</a>
    </div>
  </div>
</div>
</body>
</html>