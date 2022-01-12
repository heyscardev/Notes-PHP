<?php
include_once("models/Periods.php");
include_once("models/crud/CRUDPeriods.php");
include_once("models/AcademicData.php");
include_once("models/crud/CRUDAcademicData.php");
include_once("controllers/tools/Validacion.php");
//include_once("controllers/tools/components.php");

class PeriodsController{
    public function inicio(){
       $adata = LoginController::getAcademicData();
       $datos_periodos = CRUDPeriods::ReadByIdUser(LoginController::getIdUser());
       function promediodelalumno(){
      
       return 64;
       }
        $head_principal["carrer"] = strtoupper($adata->getProfession());
        //aqui
        $head_principal["promedio"]= promediodelalumno();
        $head_principal["state"]= "por reprobar";
        $head_principal["title"] = "Periodos";
        
        $this->register();
        function promedio($id_period){
            return 1;
        }
        function cursado($id_period){
            return $id_period;

        }
       // Tools::generateTable(
       // array("Codigo de periodo","f. inicio","f. termina","opciones"),$datos_periodos,"getIdPeriod");  no pude implementar
        //completar
        
        require_once('views/periods/index.php');
    }
 
    private function register(){
        if(LoginController::getSesionState()){
            if(isset($_POST["codigo"])&&isset($_POST["start_date"])&&isset($_POST["end_date"])){
                CRUDPeriods::Create(new Periods(LoginController::getIdUser(),1,strtoupper($_POST["codigo"]),$_POST["start_date"],$_POST["end_date"]));
                header("location: ./?controlador=Periods&accion=inicio");}
    
        }
        else{
        ErrorControl::appNoLoginRedirect();
        }
      
        
       
    }
    public function editar(){
        if(LoginController::getSesionState()){
        if(isset(($_POST["editar"]))){
            CRUDPeriods::update(new Periods(1,$_GET["id"],$_POST["cod_period"],$_POST["start_date"],$_POST["end_date"]));
            header("location: ./?controlador=Periods&accion=inicio");
        }
        }
        else{
        ErrorControl::appNoLoginRedirect();
        }
        
        
      
    }
    public function borrar(){
        if(LoginController::getSesionState()){
         if(isset($_GET["id"])){
            if(is_numeric($_GET["id"])){
                CRUDPeriods::Delete(intval($_GET["id"]));
                header("location: ./?controlador=Periods&accion=inicio");
            }else{
                echo "el id no es numero";
            }
        
        }
        }
        else{
        ErrorControl::appNoLoginRedirect();
        }
       
       

    }
    private function calCompletePeriod($start_date,$end_date){
        $fecha1= new DateTime($start_date);
        $fecha2= new DateTime($end_date);
        $diff1 = $fecha1->diff($fecha2);
        $diff1 = $fecha1->diffdate('Y/m/d'));
        // El resultados sera 3 dias
        echo $diff->days . ' dias';
    
    }
    
}