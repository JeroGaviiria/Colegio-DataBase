<?php

class Login{
    public $array = [
        "name" => "pedro",
        "edad" => 12

    ];
        
   
    public $user = "";
    public $password = "";
    public $usu = "jero@mail.com";
    public $pass = "1234";
    public $cadena = "true";
    public $cadena2 = "false";

    function entrarDatos($variable1, $variable2){
        $this->user = $variable1;
        $this->password = $variable2;
    }

    function loguear(){
        $us = $this->usu;
        $ps = $this->pass;

        $us1 = $this->user;
        $ps1 = $this->password;

        if (($us === $us1) && ($ps === $ps1)){
            return $this->cadena;
        }
        else{
            return $this->cadena2;
        }
    }
}

?>