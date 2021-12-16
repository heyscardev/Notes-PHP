<?php
class Tasks{
    private $idTask;
    private $idSubjectStudied;
    private $name;
    private $description;
    private $subjectNote;
    private $deliverDate;
    private $nCorte;
    
    public function __construct(int $idTask,int $idSubjectStudied,string $name,string $description,float $subjectNote,DateTime $deliverDate,$nCorte ) {
        $this->idTask = $idTask;
        $this->idSubjectStudied = $idSubjectStudied;
        $this->name = $name;
        $this->description = $description;
        $this->subjectNote = $subjectNote;
        $this->deliverDate = $deliverDate;
        $this->nCorte = $nCorte;
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

    /**
     * Get the value of nCorte
     */ 
    public function getNCorte()
    {
        return $this->nCorte;
    }

    /**
     * Set the value of nCorte
     *
     * @return  self
     */ 
    public function setNCorte($nCorte)
    {
        $this->nCorte = $nCorte;

        return $this;
    }
}
?>