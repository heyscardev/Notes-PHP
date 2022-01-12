<?php
 include_once("models/crud/CRUDUsers.php");
 include_once("Connection.php");
class UsersController{
public function register(){
$error = "";
    if(isset($_POST["email"])&&isset($_POST["password"])){
       if(CRUDUsers::ReadByEmail($_POST["email"])==NULL){
       
       $error ="";
       CRUDUsers::Create(new Users(0,strtolower($_POST["email"]),$_POST["password"]));
       LoginController::LoginEmailUser($_POST["email"],$_POST["password"]);
       }else{
       $error = "$_POST[email] ya se ha registrado";
       
       }

    }
      require_once("views/user/create.php");
}


}
?>