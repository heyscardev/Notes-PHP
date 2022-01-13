<?php
include_once("models/TasksEnds.php");

class CRUDTasksEnds{

    public static function Create(TasksEnds $newObject){
        $cn = Connection::getInstance();
        $idresp = NULL;
        $comand = "SELECT MAX(id_task) FROM `tasks`";
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $id){
           $idresp = $id[0];
        }
        $comand = "INSERT INTO `tasks_ends` (`id_task`, `url`, `exam_note`, `id_task_end`) VALUES (?, ?, ?, ?);";
        $sql = $cn->prepare($comand);
        $sql->execute(array($idresp, $newObject->getUrl(), $newObject->getExamNote(), $newObject->getIdTaskEnd()));
    }

    public static function Update(TasksEnds $newObject){
        $cn = Connection::getInstance();
        $comand = "UPDATE tasks_ends SET exam_note = ? WHERE id_task = ?";
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getExamNote(),$newObject->getIdTask()));
    }

    public static function Read(int $id){
        $tasksEnds = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `tasks_ends` WHERE id_task = $id" ;
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
        $comand = "DELETE FROM `tasks_ends` WHERE 'id_task' = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
    public static function DeleteByIdSubjectStudied(int $id_subjectStudied){
        $cn = Connection::getInstance();
        require_once("models/crud/CRUDTasks.php");
       $D = CRUDTasks::readByIdSubjectStudied($id_subjectStudied);

        foreach ($D as $s) {
    echo $s->getIdTask();
            $comand = "DELETE FROM `tasks_ends` WHERE id_task = ?" ;
            $sql = $cn->prepare($comand);
            
            $sql->execute(array($s->getIdTask()));
            
        }
       

    
    }

    public static function ReadIdTask(int $id){
        $idss = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT exam_note FROM `tasks_ends` INNER JOIN tasks t ON tasks_ends.id_task = t.id_task WHERE t.id_task = $id" ;
        $sql = $cn->query($comand);
        foreach($sql->fetchAll() as $q){
            $idss =  $q["exam_note"];
        }
        return $idss;
    }
}
?>