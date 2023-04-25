<?php
include("conection.php");
$con=conection();

$id_student = $_GET['id'];


$sql = "DELETE FROM students WHERE id_student= '$id_student'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: students.php");
}
else{
}


?>