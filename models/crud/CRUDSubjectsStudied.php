<?php
include_once("models\SubjectsStudied.php");
include_once("models/Subjects.php");
include_once("models\Periods.php");
class CRUDSubjectsStudied{
    public static function Create(SubjectsStudied $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO subjects_studied(id_period,id_subject) VALUES(?,?)" ;
        $sql = $cn->prepare($comand);
        echo $newObject->getIdPeriod()."-".$newObject->getIdSubject();
        $sql->execute(array($newObject->getIdPeriod(),$newObject->getIdSubject()));
    }
   /*  public static function Update(AcademicData $newObject){
        $cn = Connection::getInstance();
        $comand ='update academic_data set institution_Name="'.$newObject->getInstitutionName().'",
         profession="'.$newObject->getProfession().'", title="'.$newObject->getTitle().'",
         months_duration="'.$newObject->getMonthsDuration().'",star_date="'.$newObject->getStarDate().'" 
         where id_user="'.$newObject->getIdUser().'"';
        $sql = $cn->prepare($comand);
          } */
    public static function ReadByIdUser(int $id){
        $group = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM periods JOIN `subjects_studied` ON periods.id_period = subjects_studied.id_period JOIN subjects ON subjects_studied.id_subject = subjects.id_subject WHERE periods.id_user = $id;
        " ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $q){
            $subjectStudied =  new SubjectsStudied($q['id_period'],$q['id_subject'],$q['id_subject_studied']);
            $subject = new Subjects($q['id_subject'],$q['name'],$q['approval_note'],$q['professor_name']);
            $period = new Periods($q['id_user'],$q['id_period'],$q['cod_period'],$q['start_date'],$q['end_date']);
            $group[]= ["subject"=>$subject,"subjectStudied"=>$subjectStudied,"period"=>$period];
        }
        
        return $group;
    }
    
    public static function Read(int $id){
        $subjectStudied = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `subjects_studied` WHERE id_subject_studied = $id" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $q){
            $subjectStudied =  new SubjectsStudied($q['id_period'],$q['id_subject'],$q['id_subject_studied']);
        }
        
        return $subjectStudied;
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
        $comand = "DELETE FROM `subjects_studied` WHERE subjects_studied.id_subject_studied = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
    public static function update(SubjectsStudied $editar){
        $cn = Connection::getInstance();
        $comand = "UPDATE subjects_studied SET id_period = ?   WHERE id_subject_studied = ?";
        $sql = $cn->prepare($comand);
        $sql->execute(array($editar->getIdPeriod(),$editar->getIdSubjectStudied()));
    
    }

}
?>