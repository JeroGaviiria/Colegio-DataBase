<?php

function conection_t(){
    $host = "127.0.0.1:3306";
    $user = "root";
    $pass = "root";

    $bd = "crud_t";

    $con = mysqli_connect($host, $user, $pass);

    mysqli_select_db($con, $bd);

    return $con;
}


?>