<?php
class Connection{
private static  $conec = NULL;
private  static $DB_NAME = 'db_notes';
private static $USER_NAME= 'root'; 
private static $USER_PASS = '12345678';
private static  $HOST = '127.0.0.1';

private function __construct(){

}
public static function getInstance(){
    if(!isset(self::$conec)){
        $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
       self::$conec = new PDO(('mysql:host='.self::$HOST.';dbname='.self::$DB_NAME),self::$USER_NAME,self::$USER_PASS,$opcionesPDO);
       echo "conexion nueva";
    }else{
        echo "reutilizando conexion";
    }
    return self::$conec;
    
}


    


}
?>