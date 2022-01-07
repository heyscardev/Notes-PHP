<?php
include_once("models/Tasks.php");
include_once("models/Periods.php");
include_once("models/subjects.php");

class CRUDTasks{
    
    public static function Create(Tasks $newObject){
        $cn = Connection::getInstance();
        $comand = "INSERT INTO tasks (name, description, subject_note, deliver_date, n_corte) VALUES(?,?,?,?,?)" ;
        $sql = $cn->prepare($comand);
        $sql->execute( array( $newObject->getName(), $newObject->getDescription(), $newObject->getSubjectNote(), $newObject->getDeliverDate(), $newObject->getNCorte()));
    }

    public static function Update(Tasks $newObject){
        $cn = Connection::getInstance();
        $comand ='update tasks set name="'.$newObject->getName().'",
        description="'.$newObject->getDescription().'", subject_note="'.$newObject->getSubjectNote().'",
        deliver_date="'.$newObject->getDeliverDate().'", n_corte="'.$newObject->getNCorte().'" 
         where id_task="'.$newObject->getIdTask().'"';
        $sql = $cn->prepare($comand);
    }

    public static function ReadByIdUser(int $id){
        
        $group= [];
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM periods INNER JOIN subjects_studied ON periods.id_period = subjects_studied.id_period INNER JOIN tasks ON subjects_studied.id_subject_studied = tasks.id_subject_studied INNER JOIN subjects ON subjects.id_subject = subjects_studied.id_subject WHERE periods.id_user = 2" ;
        $sql = $cn->query($comand);
        
        foreach($sql->fetchAll() as $q){
            $task = new Tasks($q["id_task"],$q["id_subject_studied"],$q[10],$q["description"],$q["subject_note"],$q["deliver_date"],$q["n_corte"]);
            $period = new Periods($q['id_user'],$q['id_period'],$q['cod_period'],$q['start_date'],$q['end_date']);
            $subject = new Subjects($q['id_subject'],$q[16],$q['approval_note'],$q['professor_name']);
            $group[] = ["task"=>$task,"period" =>$period,"subject"=>$subject];
            
           
        }
        return $group;
    }

    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `tasks` WHERE tasks.id_task = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
}
?>