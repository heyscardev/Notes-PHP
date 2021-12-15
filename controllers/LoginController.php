<?php 
include_once('models/crud/CRUDUsers.php');
include_once('models/Users.php');
class LoginController{
private static Users  $User;
private static $LoginState = 0;

public static function Login(string $email, string $password){
    if(self::$User == NULL){
        $temp =  CRUDUsers::Read($email,$password);
        if($temp == NULL){
            return 0;
        }else{
            self::$User = $temp;
            self::$LoginState = 1;
            return 1;
        }
    }else{
        return 2;
    }

}
public static function getNameLogin()
{
    if
}

}