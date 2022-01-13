<?php
include_once("models/Periods.php");
include_once("models/crud/CRUDPeriods.php");
include_once("models/AcademicData.php");
include_once("models/crud/CRUDAcademicData.php");
include_once("models/crud/CRUDSubjectsStudied.php");
include_once("models/crud/CRUDSubjects.php");
include_once("controllers/tools/Validacion.php");
require_once("views/error.php");
//include_once("controllers/tools/components.php");

class PeriodsController
{
    public function inicio()
    {
        $adata = LoginController::getAcademicData();
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
        $head_principal["title"] = "Periodos";

        $this->register();




        function cursado($start_date, $end_date)
        {
            $fecha1 = new DateTime($start_date);
            $fecha2 = new DateTime($end_date);
            $fechaactual = new DateTime(date('Y/m/d'));;
            $diff1 = $fecha1->diff($fecha2);
            $diff2 = $fecha1->diff($fechaactual);
            if ($diff1->days <= $diff2->days) {
                return "periodo Terminado";
            }
            if ($fecha1 > $fechaactual) {
               $falta = $fechaactual->diff($fecha1);
                return "periodo sin empezar falta ($falta->days)dias";
            }
            return number_format($diff2->days * 100 /  $diff1->days, 2, ".") . "%";
        }
        // Tools::generateTable(
        // array("Codigo de periodo","f. inicio","f. termina","opciones"),$datos_periodos,"getIdPeriod");  no pude implementar
        //completar

        require_once('views/periods/index.php');
    }

    private function register()
    {
        if (LoginController::getSesionState()) {
            if (isset($_POST["codigo"]) && isset($_POST["start_date"]) && isset($_POST["end_date"])) {
                CRUDPeriods::Create(new Periods(LoginController::getIdUser(), 1, strtoupper($_POST["codigo"]), $_POST["start_date"], $_POST["end_date"]));
                header("location: ./?controlador=Periods&accion=inicio");
            }
        } else {
            ErrorControl::appNoLoginRedirect();
        }
    }
    public function editar()
    {
        if (LoginController::getSesionState()) {
            if (isset(($_POST["editar"]))) {
                CRUDPeriods::update(new Periods(1, $_GET["id"], $_POST["cod_period"], $_POST["start_date"], $_POST["end_date"]));
                header("location: ./?controlador=Periods&accion=inicio");
            }
        } else {
            ErrorControl::appNoLoginRedirect();
        }
    }
    public function borrar()
    {
        if (LoginController::getSesionState()) {
            if (isset($_GET["id"])) {
               
                    $se = CRUDSubjectsStudied::ReadByIdPeriod($_GET["id"]);
                    CRUDPeriods::Delete(intval($_GET["id"]));

                    header("location: ./?controlador=Periods&accion=inicio");
              
            }
        } else {
            ErrorControl::appNoLoginRedirect();
        }
    }
}
