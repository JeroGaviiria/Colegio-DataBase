<?php
include("conection.php");
$con=conection();

$id_student = $_POST['id_student'];
$ti = $_POST['ti'];
$namess = $_POST['namess'];
$lastnames = $_POST['lastnames'];

$sql = "INSERT INTO students VALUES('$id_student', '$ti', '$namess', '$lastnames')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: students.php");
}
else{
}


?>