<?php
class Tasks{
    private $idTask;
    private $idSubjectStudied;
    private $name;
    private $description;
    private $subjectNote;
    private $deliverDate;
    
    public function __construct($idTask,$idSubjectStudied,$name,$description,$subjectNote,$deliverDate ) {
        $this->idTask = $idTask;
        $this->idSubjectStudied = $idSubjectStudied;
        $this->name = $name;
        $this->description = $description;
        $this->subjectNote = $subjectNote;
        $this->deliverDate = $deliverDate;
    }

    /**
     * Get the value of idTask
     */ 
    public function getIdTask()
    {
        return $this->idTask;
    }

    /**
     * Set the value of idTask
     *
     * @return  self
     */ 
    public function setIdTask($idTask)
    {
        $this->idTask = $idTask;

        return $this;
    }

    /**
     * Get the value of idSubjectStudied
     */ 
    public function getIdSubjectStudied()
    {
        return $this->idSubjectStudied;
    }

    /**
     * Set the value of idSubjectStudied
     *
     * @return  self
     */ 
    public function setIdSubjectStudied($idSubjectStudied)
    {
        $this->idSubjectStudied = $idSubjectStudied;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of deliverDate
     */ 
    public function getDeliverDate()
    {
        return $this->deliverDate;
    }

    /**
     * Set the value of deliverDate
     *
     * @return  self
     */ 
    public function setDeliverDate($deliverDate)
    {
        $this->deliverDate = $deliverDate;

        return $this;
    }

    /**
     * Get the value of subjectNote
     */ 
    public function getSubjectNote()
    {
        return $this->subjectNote;
    }

    /**
     * Set the value of subjectNote
     *
     * @return  self
     */ 
    public function setSubjectNote($subjectNote)
    {
        $this->subjectNote = $subjectNote;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
?>