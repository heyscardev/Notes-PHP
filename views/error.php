<?php
class ErrorControl{
public static $error_message = "";
public static function errorNoLogin(){ 

 echo  '<div class="alert alert-primary text-center fs-4 e align-self-center text-white" role="alert">
  Debes  <a class=" " type="button" data-bs-toggle="collapse" data-bs-target="#collapselogin"
            aria-expanded="true" aria-controls="collapselogin">Iniciar sesion</a> para acceder a la APP
</div>';

}
public static function alertWarning(string $message){
  ?> <div class="alert alert-primary text-center fs-4 e align-self-center text-white" role="alert">
   <?php echo self::$error_message; ?>
  </div>';
  <?php
}
public static function appNoLoginRedirect(){
header("location: ./?controlador=views&accion=app");
}


}
?>