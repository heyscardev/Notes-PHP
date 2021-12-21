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
        $this->register();
        function promedio($id_period){
            return 1;
        }
        function cursado($id_period){
            return $id_period;

        }
        //completar

        require_once('views/periods/index.php');
    }
 
    private function register(){
       if(isset($_POST["codigo"])&&isset($_POST["start_date"])&&isset($_POST["end_date"])){
       CRUDPeriods::Create(new Periods(2,1,strtoupper($_POST["codigo"]),$_POST["start_date"],$_POST["end_date"]));
       header("location: ./?controlador=Periods&accion=inicio");
        
       }
    }
    public function borrar(){
        if(isset($_GET["id"])){
            if(is_numeric($_GET["id"])){
                CRUDPeriods::Delete(intval($_GET["id"]));
                header("location: ./?controlador=Periods&accion=inicio");
            }else{
                echo "el id no es numero";
            }
        
        }
    }
}