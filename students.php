<?php
 include("conection.php");
$con=conection();

$sql = "SELECT * FROM students";
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
    <title>Student</title>
</head>
<body>
<div class="container mt-5">
  <div class="row ">
    <div class="col-md-3">
     <h1 class="text-light">Enter Data</h1>
     <form action="create.php" method="POST">
        <input type="text" class="form-control mb-3" name="id_student" placeholder="Student ID">
        <input type="text" class="form-control mb-3" name="ti" placeholder="Student TI">
        <input type="text" class="form-control mb-3" name="namess" placeholder="Names">
        <input type="text" class="form-control mb-3" name="lastnames" placeholder="Last Name">
        <input type="submit"class="btn btn-primary">

     </form>
    </div>
    <div class="col-md-8">
    <table class="table">
  <thead class="table-success table-striped">
    <tr>
      <th >Student ID</th>     
      <th >Student TI</th>   
      <th >Names</th>   
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
      <th ><?php echo $row['id_student']?></th>   
      <th ><?php echo $row['ti']?></th>
      <th ><?php echo $row['namess']?></th>   
      <th ><?php echo $row['lastnames']?></th>     
      <th><a href="actualizar.php?id=<?php echo $row['id_student'] ?>" class="btn btn-info">Editar</a></th> 
      <th><a href="delete.php?id=<?php echo $row['id_student'] ?>" class="btn btn-danger">Eliminar</a></th>    
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>  
    </div>
    <div class="col-sm-1">
    <a class="btn ml-2 btn-warning" href="./teachers.php" role="button">Go to Teachers</a>
    </div>
  
  </div>
 
</div>
</body>
</html>