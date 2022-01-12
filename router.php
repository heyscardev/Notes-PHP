<?php


if(isset($controlador)){
if(LoginController::getSesionState()){
    require_once('controllers/'.ucfirst($controlador).'Controller'.'.php');
    $objControlador =  ucfirst($controlador).'Controller';//ControldorPaginas
    $controlador = new $objControlador();
    $controlador->$accion();

}else{
if(ucfirst($controlador)=="Users"){
    require_once('controllers/UsersController.php');
    $controlador = new UsersController();
    $controlador->register();


}else{
    require_once('controllers/ViewsController.php');
    $controlador = new ViewsController();
    $controlador->app();
}
}
  
 }else{
require_once('controllers/ViewsController.php');
$controlador = new ViewsController();
$controlador->home();
 }


?>