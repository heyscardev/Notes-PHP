<?php
class AcademicData
{
      private $idUser;
      private $institutionName;
      private $profession;
      private $title;
      private $monthsDuration;
      private $starDate;

      public function __construct($idUser, $institutionName, $profession, $title, $monthsDuration, $starDate)
      {
            $this->idUser = $idUser;
            $this->institutionName = $institutionName;
            $this->profession = $profession;
            $this->title = $title;
            $this->monthsDuration = $monthsDuration;
            $this->starDate = $starDate;
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
      public function getInstitutionName()
      {
            return $this->institutionName;
      }
      public function setInstitutionName($institutionName)
      {
            $this->institutionName = $institutionName;

            return $this;
      }
      public function getProfession()
      {
            return $this->profession;
      }
      public function setProfession($profession)
      {
            $this->profession = $profession;

            return $this;
      }
      public function getTitle()
      {
            return $this->title;
      }
      public function setTitle($title)
      {
            $this->title = $title;

            return $this;
      }
      public function getMonthsDuration()
      {
            return $this->monthsDuration;
      }
      public function setMonthsDuration($monthsDuration)
      {
            $this->monthsDuration = $monthsDuration;

            return $this;
      }
   
      public function getStarDate()
      {
            return $this->starDate;
      }

      public function setStarDate($starDate)
      {
            $this->starDate = $starDate;

            return $this;
      }
}
