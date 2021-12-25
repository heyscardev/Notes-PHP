<?php
include_once("models/Users.php");
include_once("Connection.php");

class CRUDUsers{
    public static function Create(Users $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO users(email,password) VALUES(?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getEmail(),$newObject->getPassword()));
        

    }
    public static function Read(string $email,string $password){
        $user = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `users` WHERE users.email = \"$email\" AND USERS.password = \"$password\"" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newUser){
            $user = new Users($newUser['id_user'],$newUser['email'],$newUser['password']);
        }
        
        return $user;
    }
    public static function ReadById(int $id){
        $user = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `users` WHERE users.id_user = $id" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newUser){
            $user = new Users($newUser['id_user'],$newUser['email'],$newUser['password']);
        }
        
        return $user;
    }
    public static function ReadAll(){
        $listaUsuarios = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `users`" ;
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $newUser){
            $listaUsuarios[] = new Users($newUser['id_user'],$newUser['email'],$newUser['password']);
        }
        return $listaUsuarios;
    }
    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `users` WHERE users.id_user = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }

}
?>