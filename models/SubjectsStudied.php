<?php
class SubjectsStudied{
    private $idPeriod;
    private $idSubject;
    private $idSubjectStudied;
    public function __construct( $idPeriod,$idSubject,$idSubjectStudied)
    {
        $this->idPeriod = $idPeriod;
        $this->idSubject = $idSubject;
        $this->idSubjectStudied = $idSubjectStudied;
        
    }


    /**
     * Get the value of idPeriod
     */ 
    public function getIdPeriod()
    {
        return $this->idPeriod;
    }

    /**
     * Set the value of idPeriod
     *
     * @return  self
     */ 
    public function setIdPeriod($idPeriod)
    {
        $this->idPeriod = $idPeriod;

        return $this;
    }

    /**
     * Get the value of idSubject
     */ 
    public function getIdSubject()
    {
        return $this->idSubject;
    }

    /**
     * Set the value of idSubject
     *
     * @return  self
     */ 
    public function setIdSubject($idSubject)
    {
        $this->idSubject = $idSubject;

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
}
?>