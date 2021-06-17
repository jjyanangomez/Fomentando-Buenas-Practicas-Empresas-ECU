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
    public function readOne($tabla,$id){
        $sql="SELECT * FROM $tabla WHERE IDrecurso_Audio=$id";
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
}


?>