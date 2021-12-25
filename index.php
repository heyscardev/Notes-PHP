<?php
require_once('views/error.php');
require_once("controllers/LoginController.php");
session_start();
if(LoginController::sesionComprove()){

}
else{
LoginController::Login();
}



if (
    isset($_GET['controlador'])
    && isset($_GET['accion'])
){
    
    $controlador =  $_GET['controlador'];
    $accion =$_GET['accion'];
    
    
}


require_once('views/template.php');
?>