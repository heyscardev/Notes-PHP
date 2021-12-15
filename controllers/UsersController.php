<?php
 include_once("models/crud/CRUDUsers.php");
 include_once("Connection.php");
class UsersController{
public function create(){
    if($_POST){
        
    // CRUDUsers::Create(new Users(0,$_POST["email"],$_POST["password"]));
     // print_r(CRUDUsers::Read($_POST["email"],$_POST["password"]));
     print_r(CRUDUsers::Delete(1));
    
      
    }
      require_once("views/user/create.php");
}

}
?>