<?php
class ViewsController{
function app(){
   require_once('views/app.php');
 
}
function home(){
    require_once('views/home.php');
}
function createTask(){
    require_once('views/Tasks/Create.php');
}
function error(string $direction,string $cabeza,string $cuerpo){
    $error = [];
    $error["head"] = $cabeza;
    $error["body"] = $cuerpo;
    $error["url"] = $direction;
    


}

}
?>