<?php
include_once("models/Subjects.php");
include_once("models/Periods.php");
include_once("models/Subjects.php");

class CRUDAPSubjects{
    public static function Create(Subjects $newObject){
        $cn = Connection::getInstance();
        $idresp = NULL;
        $comand = "INSERT INTO subjects(name,approval_note,professor_name) VALUES(?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getName(),$newObject->getApprovalNote(),$newObject->getProfessorName()));
        $comand = "SELECT MAX(id_subject) FROM `subjects`";
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $id){
           $idresp = $id[0];
        }
        return $idresp;
        
    }
   
    public static function Read(int $id){
        $academicData = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `subjects` WHERE id_subject = $id" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newUser){
            $subject = new Subjects($newUser['id_subject'],$newUser['name'],$newUser['approval_note'],$newUser['professor_name']);
        }
        
        return $subject;
    }
    public static function ReadByIdUser(int $id){
        $var = [];
        $cn = Connection::getInstance();
        $comand = "SELECT subjects.* FROM `subjects` JOIN subjects_studied ON subjects.id_subject = subjects_studied.id_subject JOIN periods ON periods.id_period = subjects_studied.id_period WHERE periods.id_user = $id" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $newUser){
            $var[] = new Subjects($newUser['id_subject'],$newUser['name'],$newUser['approval_note'],$newUser['professor_name']);
        }
        
        return $var;
    }
    public static function ReadAll(){
        $lista = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `subjects`" ;
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $newUser){
            $lista[] = new Subjects($newUser['id_subject'],$newUser['name'],$newUser['approval_note'],$newUser['professor_name']);
        }
        return $lista;
    }
    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `subjects` WHERE id_subject = ?" ;
        $sql = $cn->prepare($comand);
        
        $sql->execute(array($id));
    }
public static function update(Subjects $edit){
    $cn = Connection::getInstance();
    $comand = "UPDATE subjects SET name = ? , approval_note = ? ,professor_name = ?  WHERE id_subject = ?";
    $sql = $cn->prepare($comand);
    $sql->execute(array($edit->getName(),$edit->getApprovalNote(),$edit->getProfessorName(),$edit->getIdSubject()));

}
public static function getSubjectNote(int $id_subject_studied){
        
    $nota= 0;
    $cn = Connection::getInstance();
    $comand = "SELECT tasks_ends.* FROM tasks  INNER JOIN tasks_ends ON tasks_ends.id_task = tasks.id_task WHERE tasks.id_subject_studied  = $id_subject_studied" ;
    $sql = $cn->query($comand);
    
    foreach($sql->fetchAll() as $q){
        
            $nota = $nota + $q['exam_note'];
            
        
       
        
       
    }
    return $nota;
}
public static function getTotalCursado(int $id_subject_studied){
        
    $nota= 0;
    $cn = Connection::getInstance();
    $comand = "SELECT tasks.* FROM tasks  INNER JOIN tasks_ends ON tasks_ends.id_task = tasks.id_task WHERE tasks.id_subject_studied  = $id_subject_studied" ;
    $sql = $cn->query($comand);
    
    foreach($sql->fetchAll() as $q){
        
            $nota = $nota + $q['subject_note'];
            
        
       
        
       
    }
    return $nota;
}

}
?>