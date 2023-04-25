<?php

include("conection.php");
$con=conection();

$id_student=$_POST['id_student'];
$ti=$_POST['ti'];
$namess=$_POST['namess'];
$lastnames=$_POST['lastnames'];

$sql="UPDATE students  SET  ti='$ti',namess='$namess',lastnames='$lastnames' WHERE id_student='$id_student'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: students.php");
    }
?>