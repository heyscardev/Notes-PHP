<?php
include_once("models/Periods.php");
include_once("connection.php");

class CRUDPeriods{
    public static function Create(Periods $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO periods(id_user,cod_period,star_date,end_date) VALUES(?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getIdUser(),$newObject->getCodPeriod(),$newObject->getStartDate(),$newObject->getEndDate()));
        

    }
    public static function Read(int $id_period){
        $period = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `periods` WHERE periods.id_period = \"$id_period\" ";
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newPeriod){
            $period = new Periods($newPeriod['id_user'],$newPeriod['id_period'],$newPeriod['cod_period'],$newPeriod['start_date'],$newPeriod['end_date']);
        }
        
        return $period;
    }
    public static function ReadAll(){
        $listaPeriodos = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `periods`" ;
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $newPeriod){
            $listaPeriodos[] =new   Periods($newPeriod['id_user'],$newPeriod['id_period'],$newPeriod['cod_period'],$newPeriod['start_date'],$newPeriod['end_date']);
        }
        return $listaPeriodos;
    }
    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `periods` WHERE periods.id_period = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }

}
?>