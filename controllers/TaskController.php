<?php
//modificar para tareas aun no esta listo
include_once("models/Tasks.php");
include_once("models/crud/CRUDTasks.php");
include_once("models/AcademicData.php");
include_once("models/crud/CRUDAcademicData.php");
include_once("models/crud/CRUDTasksEnds.php");
include_once("controllers/tools/Validacion.php");
include_once("models/crud/CRUDPeriods.php");
include_once("models/crud/CRUDSubjects.php");

class TaskController{
    public function inicio(){
        $datos = [];
        if (isset($_GET["id"])) {
            $a = CRUDTasks::ReadByIdUser(LoginController::getIdUser());
            $datos = array_filter($a, function ($p) {
                return $p["task"]->getIdSubjectStudied() == $_GET["id"];
            });
        } else {

            $datos = CRUDTasks::ReadByIdUser(LoginController::getIdUser());
        }
       $adata = LoginController::getAcademicData();
       $periodos_disponibles = CRUDPeriods::ReadByIdUser(LoginController::getIdUser());
       $materias_disponibles = CRUDAPSubjects::ReadByIdUser(LoginController::getIdUser());
       
       
        $head_principal["carrer"] = strtoupper($adata->getProfession());
        //aqui
        $head_principal["completado"]= "hello";
        $head_principal["state"]= "por reprobar";
        $head_principal["period"] = "2-2020";
        
        function entregado($id_task){
            
        }
        
        $this->register();
       /*
        function cursado($id_period){
            return $id_period;

        }
        
       
        */
        require_once('views/tasks/index.php');
    }
 
    private function register(){
        if(LoginController::getSesionState()){
            if(isset($_POST["nombre_tarea"])&&isset($_POST["corte"])&&isset($_POST["nota_tarea"])&&isset($_POST["descripcion_tarea"])&&isset($_POST["end_date_tarea"])){
            $f= CRUDTasks::ReadIdSubjectStudy($_POST["materia_tarea"]); 
            
            CRUDTasks::Create(new Tasks(1,$f,$_POST["nombre_tarea"],$_POST["descripcion_tarea"],$_POST["nota_tarea"],$_POST["end_date_tarea"],$_POST["corte"]));
            
         
            header("location: ./?controlador=Task&accion=inicio");
            }
        }
        else{
        ErrorControl::appNoLoginRedirect();
        }
    }

    public function editar(){
        if(LoginController::getSesionState()){
            if(isset(($_POST["editar"]))){   
                $f= CRUDTasks::ReadIdSubjectStudy($_POST["materia_tarea"]);        
                CRUDTasks::Update(new Tasks($_GET["id"],$f,$_POST["nombre_tarea"], $_POST["descripcion_tarea"], $_POST["nota_tarea"], $_POST["end_date_tarea"], $_POST["corte"]));
                header("location: ./?controlador=Task&accion=inicio");
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
                CRUDTasksEnds::Delete(intval($_GET["id"]));
                CRUDTasks::Delete($_GET["id"]);
                header("location: ./?controlador=Task&accion=inicio");
            }else{
                echo "el id no es numero";
            }
        
        }
        }
        else{
        ErrorControl::appNoLoginRedirect();
        }
    }

    public function ingresarNota(){
        if(LoginController::getSesionState()){
            if(isset(($_GET["id"]))&&isset($_POST["nota"])){ 
            if(CRUDTasksEnds::ReadIdTask($_GET["id"])==NULL){
                CRUDTasksEnds::Create(new TasksEnds($_GET["id"],"",$_POST["nota"]))  ;
            
            }else{
                CRUDTasksEnds::Update(new TasksEnds($_GET["id"],"",$_POST["nota"]));
            
            }
               
               
                header("location: ./?controlador=Task&accion=inicio");
            }
        }
        else{
        ErrorControl::appNoLoginRedirect();
        }
    }
}
?>