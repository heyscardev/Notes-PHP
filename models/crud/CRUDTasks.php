<?php
include_once("models/Tasks.php");

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

    public static function Read(int $id){
        $task = NULL;
        $cn = Connection::getInstance();
        $comand = "SELECT * FROM `tasks` WHERE tasks.id_task = $id" ;
        $sql = $cn->query($comand);
        
        foreach($sql->fetchAll() as $newUser){
            $user = new Users($newUser['id_user'],$newUser['email'],$newUser['password']);
        }
        return $user;
    }

    public static function Delete(int $id){
        
        $cn = Connection::getInstance();
        $comand = "DELETE FROM `tasks` WHERE tasks.id_task = ?" ;
        $sql = $cn->prepare($comand);
        
        return $sql->execute(array($id));
    }
}
?>