<?php
include_once("models/TasksEnds.php");

class CRUDAPSubjects{

    public static function Create(TasksEnds $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO tasks_ends (url, exam_note) VALUES(?,?)";
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getUrl(), $newObject->getExamNote()));
    }

    public static function Read(int $id){
        $academicData = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `tasks_ends` WHERE id_task_end = $id" ;
        $sql = $cn->query($comand);
        
        foreach($sql->fetchAll() as $newUser){
            $tasksEnds = new TasksEnds($newUser['id_task'], $newUser['url'], $newUser['exam_note'], $newUser['id_task_end']);
        }
        return $tasksEnds;
    }

    public static function ReadAll(){
        $listaUsuarios = [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `tasks_ends`" ;
        $sql = $cn->query($comand);

        foreach($sql->fetchAll() as $newUser){
            $lista[] = new TasksEnds($newUser['id_task'], $newUser['url'], $newUser['exam_note'], $newUser['id_task_end']);
        }
        return $lista;
    }

    public static function Delete(int $id){
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `tasks_ends` WHERE 'id_task_end' = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
}
?>