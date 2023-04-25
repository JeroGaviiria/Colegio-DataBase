<?php

include("conection_t.php");
$con=conection_t();

$id_teacher=$_POST['id_teacher'];
$dni=$_POST['dni'];
$t_names=$_POST['t_names'];
$t_lastnames=$_POST['t_lastnames'];

$sql="UPDATE teachers  SET  dni='$dni', t_names='$t_names',t_lastnames='$t_lastnames' WHERE id_teacher='$id_teacher'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: teachers.php");
    }
?>