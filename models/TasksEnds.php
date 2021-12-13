<?php
class TasksEnds{
    private $idTask;
    private $idTaskEnd;
    private $url;
    private $examNote;
    public function __construct($idTask,$idTaskEnd,$url,$examNote) {
        $this->idTask = $idTask;
        $this->idTaskEnd = $idTaskEnd;
        $this->url = $url;
        $this->examNote = $examNote;
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
     * Get the value of idTaskEnd
     */ 
    public function getIdTaskEnd()
    {
        return $this->idTaskEnd;
    }

    /**
     * Set the value of idTaskEnd
     *
     * @return  self
     */ 
    public function setIdTaskEnd($idTaskEnd)
    {
        $this->idTaskEnd = $idTaskEnd;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of examNote
     */ 
    public function getExamNote()
    {
        return $this->examNote;
    }

    /**
     * Set the value of examNote
     *
     * @return  self
     */ 
    public function setExamNote($examNote)
    {
        $this->examNote = $examNote;

        return $this;
    }
}
?>