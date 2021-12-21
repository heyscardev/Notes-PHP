<?php
include_once("models\SubjectsStudied.php");
class CRUDSubjectsStudied{
    public static function Create(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO subjects_studied(id_period,id_subject,id_subject_studied
        ) VALUES(?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getIdPeriod(),$newObject->getIdSubject(),$newObject->getIdSubjectStudied()));
    }
   /*  public static function Update(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand ='update academic_data set institution_Name="'.$newObject->getInstitutionName().'",
         profession="'.$newObject->getProfession().'", title="'.$newObject->getTitle().'",
         months_duration="'.$newObject->getMonthsDuration().'",star_date="'.$newObject->getStarDate().'" 
         where id_user="'.$newObject->getIdUser().'"';
        $sql = $cn->prepare($comand);
        
    } */
    
    public static function Read(int $id){
        $academicData = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `subjects_studied` WHERE id_subject_studied = $id" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newUser){
            $user =  $listaUsuarios[] = new Users($newUser['id_period'],$newUser['id_subject'],$newUser['id_subject_studied']);
        }
        
        return $user;
    }
    public static function ReadAll(){
        $listaUsuarios = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `subjects_studied`" ;
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $newUser){
            $listaUsuarios[] = new Users($newUser['id_period'],$newUser['id_subject'],$newUser['id_subject_studied']);
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