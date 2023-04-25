<?php
include("conection_t.php");
$con=conection_t();

$id_teacher = $_POST['id_teacher'];
$dni= $_POST['dni'];
$t_names = $_POST['t_names'];
$t_lastnames = $_POST['t_lastnames'];

$sql = "INSERT INTO teachers VALUES('$id_teacher', '$dni', '$t_names', '$t_lastnames')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: teachers.php");
}
else{
}


?>