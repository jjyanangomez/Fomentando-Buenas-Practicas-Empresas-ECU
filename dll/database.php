<?php 
    class Database {
        private $con;
        private $dbhost = '127.0.0.1';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'fomentando-b-p-e-e';
    

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

    /*Consulta para insertar */
    public function create ($nombres, $apellidos, $telefono, $direccion, $correo){
        $sql = "INSERT INTO clientes (nombres, apellidos, telefono, direccion, correo_electronico) VALUES ('$nombres','$apellidos','$telefono','$direccion','$correo')";
        $res = mysqli_query($this ->con, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }

    /*Leer Datos*/
    public function read(){
        $sql="SELECT * FROM clientes";
        $res=mysqli_query($this->con,$sql);
        return $res;
    } 
    /*Borrar */
    public function delete($id){
        $sql="DELETE FROM clientes WHERE id=$id";
        $res=mysqli_query($this->con,$sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    /*Actualizar datos */
    public function update($id,$nombres, $apellidos, $telefono, $direccion, $correo){
        $sql="UPDATE clientes SET nombres='$nombres',
        apellidos='$apellidos',telefono='$telefono',
        direccion='$direccion',correo_electronico='$correo' WHERE id=$id" ;
        $res=mysqli_query($this->con,$sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    //Obtener un dato
    public function readOne($id){
        $sql="SELECT * FROM clientes WHERE id=$id";
        $res=mysqli_query($this->con,$sql);
        return $res;
    }
    //consultar las provincias
    public function readConsulta($sql){
        $res = mysqli_query($this->con,$sql);
        return $res;
    }
}


?>