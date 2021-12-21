<?php
include_once("models/Periods.php");
include_once("models/crud/CRUDPeriods.php");
include_once("models/AcademicData.php");
class PeriodsController{
    public function inicio(){
        $carrer = new AcademicData(1,"iujo","informatica","Tecnico Superior",12,11);
        $head_principal["carrer"] = "none carrer";
        $head_principal["completado"]= "12";
        $head_principal["state"]= "por reprobar";
        $head_principal["period"] = "2-2020";
        $datos_periodos = CRUDPeriods::ReadAll();
        
        function promedio($id_period){
            return 1;
        }
        function cursado($id_period){
            return $id_period;

        }
        //completar

        require_once('views/periods/index.php');
    }
    public function create(){
        
    }
}