<?php class Validacion{
//valida si es una fecha o si es una fecha existe en el calendario
public static function ifFecha($fecha){
   
    $valores = explode('-', $fecha);
    
    if(count($valores)== 3){
    
    if(is_numeric($valores[0]) && is_numeric($valores[1]) && is_numeric($valores[2])){
    if(checkdate($valores[1],$valores[2],$valores[0])){
    return true;}
    }
    
    }
return false;



}

}

?>