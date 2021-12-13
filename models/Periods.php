<?php
class Periods{
    private $idUser;
    private $idPeriod;
    private $codPeriod;
    private $startDate;
    private $endDate;

    public function __construct($idUser,$idPeriod, $codPeriod, $startDate,$endDate)
    {
       $this->idUser = $idUser;
       $this->idPeriod = $idPeriod;
       $this->codPeriod = $codPeriod; 
       $this->startDate = $startDate;
       $this->endDate = $endDate;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdPeriod()
    {
        return $this->idPeriod;
    }

    public function setIdPeriod($idPeriod)
    {
        $this->idPeriod = $idPeriod;

        return $this;
    }

    public function getCodPeriod()
    {
        return $this->codPeriod;
    }

    public function setCodPeriod($codPeriod)
    {
        $this->codPeriod = $codPeriod;

        return $this;
    }

  
    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
?>