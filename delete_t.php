<?php
include("conection_t.php");
$con=conection_t();

$id_teacher = $_GET['id'];


$sql = "DELETE FROM teachers WHERE id_teacher= '$id_teacher'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: teachers.php");
}
else{
}


?>