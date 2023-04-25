<?php 

if(isset($_POST['usr'])){
    include_once('ClassPoo.php');

    $user = $_POST['usr'];
    $pass = $_POST['pss'];
    $loguin = new Login();
    $loguin ->entrarDatos($user, $pass);
    $loguin ->loguear();
    $response = $loguin->loguear();

    if($response === "true"){
        header("location: ../index.php");
        echo'<script language"javaScript"> alert("Bienvenido, Jero");</script>';
    }
    else{
        echo'<script language"javaScript"> alert("error de datos");</script>';
    }
}

?>