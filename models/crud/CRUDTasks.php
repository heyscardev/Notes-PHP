<?php
include_once("models/Tasks.php");
include_once("models/Periods.php");
include_once("models/subjects.php");

class CRUDTasks{
    
    public static function Create(Tasks $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO tasks(id_subject_studied, name, description, subject_note, deliver_date, n_corte) VALUES(?,?,?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute( array($newObject->getIdSubjectStudied(),$newObject->getName(), $newObject->getDescription(), $newObject->getSubjectNote(), $newObject->getDeliverDate(), $newObject->getNCorte()));
    }

    public static function Update(Tasks $newObject){
        $cn = Connection::getInstance();
        $comand = "UPDATE tasks SET id_subject_studied = ?, name = ? , description = ?, subject_note = ?, deliver_date = ?, n_corte = ? WHERE id_task = ?";
        $sql = $cn->prepare($comand);
        $sql->execute(array($newObject->getIdSubjectStudied(),$newObject->getName(), $newObject->getDescription(), $newObject->getSubjectNote(), $newObject->getDeliverDate(), $newObject->getNCorte(), $newObject->getIdTask()));
    }

    public static function ReadByIdUser(int $id){
        
        $group= [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM periods  INNER JOIN subjects_studied ON periods.id_period = subjects_studied.id_period INNER JOIN tasks ON subjects_studied.id_subject_studied = tasks.id_subject_studied INNER JOIN subjects ON subjects.id_subject = subjects_studied.id_subject LEFT JOIN tasks_ends ON tasks_ends.id_task=tasks.id_task WHERE periods.id_user = $id" ;
        $sql = $cn->query($comand);
        
        foreach($sql->fetchAll() as $q){
            $task = new Tasks($q["8"],$q["id_subject_studied"],$q[10],$q["description"],$q["subject_note"],$q["deliver_date"],$q["n_corte"]);
            $period = new Periods($q['id_user'],$q['id_period'],$q['cod_period'],$q['start_date'],$q['end_date']);
            $subject = new Subjects($q['id_subject'],$q[16],$q['approval_note'],$q['professor_name']);
            if($q['id_task_end']!=NULL){
                $taskend = new TasksEnds($q['id_task'],$q['url'],$q['exam_note'],$q['id_task_end']);
                $group[] = ["task"=>$task,"period" =>$period,"subject"=>$subject,"taskend"=>$taskend];
            
            }else{
                $group[] = ["task"=>$task,"period" =>$period,"subject"=>$subject];
            }
           
           
            
           
        }
        return $group;
    }

    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `tasks` WHERE tasks.id_task = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }

    public static function ReadIdSubjectStudy(int $id){
        $idss = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT subjects_studied.id_subject_studied FROM `subjects_studied` JOIN subjects ON subjects.id_subject= subjects_studied.id_subject WHERE subjects.id_subject= $id" ;
        $sql = $cn->query($comand);
        
        
        foreach($sql->fetchAll() as $q){
            $idss =  $q["id_subject_studied"];
        }
        
        return $idss;
    }

    public static function ReturnLastID(){
        $idss = 0;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM tasks";
        $sql = $cn->query($comand);
        
        foreach($sql->fetchAll() as $q){
            $idss =  $q["id_task"];
        }
        return $idss;
    }
}
?>