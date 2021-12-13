<?php

class CRUDAcademicData{
    public static function Create(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO academic_data(institution_Name,profession,title,months_duration,star_date) VALUES(?,?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->))


    }
}
?>