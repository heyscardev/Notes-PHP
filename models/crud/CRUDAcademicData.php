<?php
include_once("models/AcademicData.php");
include_once("connection.php");

class CRUDPeriods{
    public static function Create(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO academic_data(id_user,institution_name,title,profession,months_duration,star_date) VALUES(?,?,?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getIdUser(),$newObject->getInstitutionName(),$newObject->getTitle(),$newObject->getProfession(),$newObject->getMonthsDuration(),$newObject->getStarDate()));
        

    }
    
    public static function ReadByIdUser(int $id_User){
        $academic = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `academic_data` WHERE academic_data.id_user = \"$id_User\" ";
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newresp){
            $academic[] = new AcademicData($newresp['id_user'],$newresp['institution_name'],$newresp['profession'],$newresp['title'],$newresp['months_duration'],$newresp["star_date"]);
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
    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `periods` WHERE periods.id_period = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
    public static function update(Periods $per){
        $cn = Connection::getInstance();
        $comand = "UPDATE periods SET cod_period = ? , start_date = ? ,end_date = ?  WHERE id_period = ?";
        $sql = $cn->prepare($comand);
        $sql->execute(array($per->getCodPeriod(),$per->getStartDate(),$per->getEndDate(),$per->getIdPeriod()));
    }

}
?>