<?php
include_once("models/UsersData.php");

class CRUDUsersData{

    public static function Create(UserData $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO user_data (first_name, last_name, date_birth, gender) VALUES(?, ?, ?, ?)";
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getFirstName(), $newObject->getLastName(), $newObject->getDateBirth(), $newObject->getGender()));
    }

    public static function Read(int $id){
        $academicData = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `user_data` WHERE id_user = $id";
        $sql = $cn->query($comand);
        
        foreach($sql->fetchAll() as $newUser){
            $usersData = new UserData($newUser['id_user'], $newUser['first_name'], $newUser['last_name'], $newUser['date_birth'], $newUser['gender']);
        }
        return $usersData;
    }

    public static function ReadAll(){
        $listaUsuarios = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `user_data`" ;
        $sql = $cn->query($comand);

        foreach($sql->fetchAll() as $newUser){
            $lista[] = new UserData($newUser['id_user'], $newUser['first_name'], $newUser['last_name'], $newUser['date_birth'], $newUser['gender']);
        }
        return $lista;
    }

    public static function Delete(int $id){
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `user_data` WHERE user_data.id_user = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
}
?>