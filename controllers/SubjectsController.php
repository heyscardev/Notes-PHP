<?php
include_once("models/Periods.php");
include_once("models/crud/CRUDSubjectsStudied.php");
include_once("models/crud/CRUDPeriods.php");
include_once("models/SubjectsStudied.php");
include_once("models/crud/CRUDSubjects.php");
include_once("models/crud/CRUDTasksEnds.php");
include_once("models/crud/CRUDTasks.php");


include_once("controllers/tools/Validacion.php");
//include_once("controllers/tools/components.php");

class SubjectsController
{
    public function inicio()
    {
        $datos_subjects = [];
        if (isset($_GET["id"])) {
            $a = CRUDSubjectsStudied::ReadByIdUser(LoginController::getIdUser());
            $datos_subjects = array_filter($a, function ($p) {
                return $p["period"]->getIdPeriod() == $_GET["id"];
            });
        } else {

            $datos_subjects = CRUDSubjectsStudied::ReadByIdUser(LoginController::getIdUser());
        }
        $periodos_disponibles =  CRUDPeriods::ReadByIdUser(LoginController::getIdUser());
        
       
        $datos_periodos = CRUDPeriods::ReadByIdUser(LoginController::getIdUser());
        function promedio($id_period)
        {
            CRUDSubjectsStudied::ReadByIdPeriod($id_period);
            $promedio = 0;
            $suma = 0;
            $contmateria = 0;
            foreach (CRUDSubjectsStudied::ReadByIdPeriod($id_period) as $subjectA) {
                $contmateria++;
                $suma +=  CRUDAPSubjects::getSubjectNote($subjectA->getIdSubjectStudied());
            }
            $suma = $suma/5;
            if($contmateria!= 0){
                $promedio  = $suma / $contmateria;
            
            }
           

            return $promedio;
        }
        function promediodelalumno()
        {
            $array = CRUDPeriods::ReadByIdUser(LoginController::getIdUser());
            $suma = 0;
            foreach ($array as $period) {
                $suma += promedio($period->getIdPeriod());
            }
            if(count($array)!= 0){
            return $suma / count($array);
            }
            return 0;
        }
        $head_principal["carrer"] = "";
        //aqui
        $head_principal["promedio"] = promediodelalumno();
        $head_principal["state"] = "";
        $head_principal["title"] = "MATERIAS";


        $this->register();
        function Nota_materia($id_subject_note)
        {
            return CRUDAPSubjects::getSubjectNote($id_subject_note);
        }
        function CURSADO_MATERIA($id_subject_note)
        {
            return CRUDAPSubjects::getTotalCursado($id_subject_note);
        }
        // Tools::generateTable(
        // array("Codigo de periodo","f. inicio","f. termina","opciones"),$datos_periodos,"getIdPeriod");  no pude implementar
        //completar

        require_once('views/subjects/index.php');
    }

    private function register()
    {
        if (LoginController::getSesionState()) {
            if (isset($_POST["idPeriod"]) && isset($_POST["name"]) && isset($_POST["professorName"]) && isset($_POST["approvalNote"])) {
                $ids =  CRUDAPSubjects::Create(new Subjects(1, $_POST["name"], $_POST["approvalNote"], $_POST["professorName"]));

                CRUDSubjectsStudied::Create(new SubjectsStudied($_POST["idPeriod"], $ids, 1));
                header("location: ./?controlador=subjects&accion=inicio");
            }
        } else {
            ErrorControl::appNoLoginRedirect();
        }
    }
    public function editar()
    {
        if (LoginController::getSesionState()) {
            if (isset(($_POST["editar"])) && isset($_GET["id"])) {

                CRUDSubjectsStudied::update(new SubjectsStudied($_POST["idPeriod"], 1, $_GET["id"],));
                $h =  CRUDSubjectsStudied::Read($_GET["id"]);
                echo  $h->getIdSubject();
                CRUDAPSubjects::update(new Subjects($h->getIdSubject(), $_POST["name"], $_POST["approvalNote"], $_POST["professorName"]));
                header("location: ./?controlador=subjects&accion=inicio");
            }
        } else {
            ErrorControl::appNoLoginRedirect();
        }
    }
    public function borrar()
    {
        if (LoginController::getSesionState()) {
            if (isset($_GET["id"]) && isset($_GET["ids"])) {
                $ID_TASK = CRUDSubjectsStudied::Read($_GET["id"]);
                CRUDTasksEnds::Delete($_GET["id"]);
                CRUDTasks::DeleteByIdSubjecStudied($ID_TASK->getIdSubjectStudied());
                CRUDSubjectsStudied::Delete($_GET["id"]);
                CRUDAPSubjects::Delete($ID_TASK->getIdSubject());

                header("location: ./?controlador=subjects&accion=inicio");
            }
        } else {
            ErrorControl::appNoLoginRedirect();
        }
    }
}
