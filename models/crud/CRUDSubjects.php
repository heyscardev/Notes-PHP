<?php
include_once("models/Subjects.php");

class CRUDAPSubjects{
    public static function Create(Subjects $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO subjects(name,approval_note,professor_name) VALUES(?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getName(),$newObject->getApprovalNote(),$newObject->getProfessorName()));
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
    public static function ReadAll(){
        $listaUsuarios = [];
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
        $comand = "DELETE FROM `subjects` WHERE 'id_period' = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }

}
?>