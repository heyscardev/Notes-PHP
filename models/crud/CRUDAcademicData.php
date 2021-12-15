<?php
include_once("models/AcademicData.php");
class CRUDAcademicData{
    public static function Create(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO academic_data(institution_Name,profession,title,months_duration,star_date) VALUES(?,?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getInstitutionName(),$newObject->getProfession(),$newObject->getTitle(),$newObject->getMonthsDuration(),$newObject->getStarDate()));
        

    }
    
    public static function Read(int $id){
        $academicData = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `academic_data` WHERE academic_data.id_user = $id" ;
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