<?php 
include_once('models/crud/CRUDUsers.php');
include_once('models/Users.php');
class LoginController{
private static Users  $User;
private static $LoginPass = false;

public static function Login(){
if(isset($_POST["iniciar_session"])){
if($_POST["email"]!="" && $_POST["password"]!= ""){
    $user_server =    CRUDUsers::Read($_POST["email"],$_POST["password"]);
    if($user_server != null  ){
        
        $_SESSION["id_user"] = $user_server->getIdUser();
        $_SESSION["email"] = $user_server->getEmail();
        $_SESSION["password"] = $user_server->getPassword();
        header("location: .?controlador=views&accion=app");
     return true;
}
}

}
self::$LoginPass = false;
return false;
}
public static function sesionComprove(){

    if(isset($_SESSION["id_user"]) && isset($_SESSION["email"]) && isset($_SESSION["password"])){
     $user_server =    CRUDUsers::ReadById($_SESSION["id_user"]);
     if($user_server == null){
        self::$LoginPass = false;
     return false;
     
     }else{
        if($user_server->getIdUser()== $_SESSION["id_user"] && $user_server->getEmail()== $_SESSION["email"] && $_SESSION["password"] == $user_server->getPassword()){
            self::$LoginPass = true;
            
        return true;
        
        }
     }
     self::$LoginPass = false;
     return false;
    } 

}
public static function getSesionState(){
return self::$LoginPass;
}
public static function cerrarSesion(){
    
            session_destroy();
            header("location: ./");
            
    
}
}