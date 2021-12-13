<?php
class Subjects{
  private $idSubject;
  private $name;
  private $approvalNote;
  private $professorName;

    public function __construct($idSubject,$name,$approvalNote,$professorName)
    {
       $this->idSubject = $idSubject;
       $this->name = $name;
       $this->approvalNote = $approvalNote;
       $this->professorName = $professorName; 
    }

  /**
   * Get the value of approvalNote
   */ 
  public function getApprovalNote()
  {
    return $this->approvalNote;
  }

  /**
   * Set the value of approvalNote
   *
   * @return  self
   */ 
  public function setApprovalNote($approvalNote)
  {
    $this->approvalNote = $approvalNote;

    return $this;
  }

  /**
   * Get the value of professorName
   */ 
  public function getProfessorName()
  {
    return $this->professorName;
  }

  /**
   * Set the value of professorName
   *
   * @return  self
   */ 
  public function setProfessorName($professorName)
  {
    $this->professorName = $professorName;

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
}
?>