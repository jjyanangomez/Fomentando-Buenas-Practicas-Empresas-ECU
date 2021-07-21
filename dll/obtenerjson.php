<?php
    //include("dll/database.php");
    //$conexion = new Database();
class encuesta{
    private $objectid;
    private $globalid;
    private $Resultados;
   // private ;

  
    
  public function leerJson(){
    $cadena = file_get_contents("https://services9.arcgis.com/2YA05qh4jhRDhuXH/arcgis/rest/services/survey123_828a14a2074847899a525923a82b5b5e/FeatureServer/0/query?outFields=*&where=1%3D1&f=json");
    $json = json_decode($cadena,true);
    $row =$json["features"];
    //$row =$json["fields"];
    //$row =$json["features"][0]["attributes"]["objectid"];
   
   
    return $row;
    ObtenerAtributos($row); 
   // print_r($row);
    
   
    } 
    

    public function ObtenerAtributos($row){
       
        for ($i=0; $i < sizeof($row); $i++) { 
           
            //setObjectid($row[$i]["attributes"]["objectid"],"<br>");
             
         //echo $row[$i]["domain"]["cvd__1_aplica_la_responsabilidad_so"],"<br>";
         //   echo $row[$i]["attributes"]["globalid"],"<br>";
           echo $row[$i]["attributes"]["Creator"],"<br>";
            
         }
       
        }
        
    public function setObjectid($objectid){
        $this -> objectid = $objectid;
     }

    public function getObjectid(){
        return  $this -> objectid;
        //$this -> object1 = $objectid;
     } 
    public function getIndicadoresEthos(){
        return  $this -> indicadorEthos;
        //$this -> object1 = $objectid;
    } 
     
    public function setIndicadoresEthos($IndicaodresEthos){
        $this -> indicadorEthos = $IndicaodresEthos;
    }


};
    
?>