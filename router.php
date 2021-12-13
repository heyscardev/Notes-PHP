<?php


if(isset($controlador)){
    require_once('controllers/'.ucfirst($controlador).'Controller'.'.php');
    $objControlador =  ucfirst($controlador).'Controller';//ControldorPaginas
    $controlador = new $objControlador();
    $controlador->$accion();
 }else{
require_once('controllers/ViewsController.php');
$controlador = new ViewsController();
$controlador->home();
 }


?>