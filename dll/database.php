<?php 
    class Database {
        /*private $con;
        private $dbhost = '127.0.0.1';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'fomentando-b-p-e-e';*/
        private $con;
        private $dbhost = 'mysql-juanyasa.alwaysdata.net';
        private $dbuser = 'juanyasa';
        private $dbpass = 'dragonperla4';
        private $dbname = 'juanyasa_fomentando-b-p-e-e';
    

    function __construct(){
        $this->connect_db();
    }

    function connect_db(){
        $this->con = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
        if(mysqli_connect_error())
        die("Conexion falla".mysqli_connect_error(). mysqli_connect_errno());
    }


    /*Limpieza de variables*/
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->con, $var);
        return $return; 
    }

    /*Borrar */
    public function deleteConsulta($sql){
        $res=mysqli_query($this->con,$sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    /*Actualizar datos */
    public function updateConsulta($sql){
        $res=mysqli_query($this->con,$sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    //Obtener un dato
    public function readOne($sql){
        $res=mysqli_query($this->con,$sql);
        return $res;
    }
    //consultar las provincias
    public function readConsulta($sql){
        $res = mysqli_query($this->con,$sql);
        return $res;
    }
    public function InsertConsulta($sql){
        $res = mysqli_query($this->con,$sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    function file_name($string) {

        // Tranformamos todo a minusculas
    
        $string = strtolower($string);
    
        //Rememplazamos caracteres especiales latinos
    
        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    
        $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    
        $string = str_replace($find, $repl, $string);
    
        // Añadimos los guiones
    
        $find = array(' ', '&', '\r\n', '\n', '+');
        $string = str_replace($find, '-', $string);
    
        // Eliminamos y Reemplazamos otros carácteres especiales
    
        $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    
        $repl = array('', '-', '');
    
        $string = preg_replace($find, $repl, $string);
    
        return $string;
        
    }
}


?>