<?php
include_once("models/AcademicData.php");
include_once("connection.php");

class CRUDAcademicData{
    public static function Create(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO academic_data(id_user,institution_name,title,profession,months_duration,star_date) VALUES(?,?,?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getIdUser(),$newObject->getInstitutionName(),$newObject->getTitle(),$newObject->getProfession(),$newObject->getMonthsDuration(),$newObject->getStarDate()));
        

    }
    
    public static function ReadByIdUser(int $id_User){
        
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `academic_data` WHERE academic_data.id_user = \"$id_User\" ";
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newresp){
            $academic = new AcademicData($newresp['id_user'],$newresp['institution_name'],$newresp['profession'],$newresp['title'],$newresp['months_duration'],$newresp["star_date"]);
        }
        
        return $academic;
    }
    public static function ReadAll(){
        $lista = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `academic_data`" ;
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $newresp){
            $lista[] =  new AcademicData($newresp['id_user'],$newresp['institution_name'],$newresp['profession'],$newresp['title'],$newresp['months_duration'],$newresp["star_date"]);
        }
        return $lista;
    }
    public static function Delete(int $id_user){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `academic_data` WHERE academic_data.id_user = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id_user));
    }
    //modificado
    public static function update(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand = "UPDATE academic_data SET institution_name = ? profession = ? , title = ? ,months_duration = ?  star_date=? WHERE id_user = ?";
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getInstitutionName(),$newObject->getProfession(),$newObject->getTitle(),$newObject->getMonthsDuration(),$newObject->getStarDate(),$newObject->getIdUser()));
    }

}
?>