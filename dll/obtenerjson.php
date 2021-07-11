<?php
class encuesta{
    private $objectid;
    private $globalid;
}
    $cadena = file_get_contents("https://services9.arcgis.com/2YA05qh4jhRDhuXH/arcgis/rest/services/survey123_828a14a2074847899a525923a82b5b5e/FeatureServer/0/query?outFields=*&where=1%3D1&f=json");
    $json = json_decode($cadena,true);
    $row =$json["features"];
    //$row =$json["fields"];
    //$row =$json["features"][0]["attributes"]["objectid"];
    echo $row;
    /*for ($i=0; $i < sizeof($row); $i++) { 
        echo $row[$i]["attributes"]["_1_raz_n_social_de_la_empresa"],"<br>";
        ;
    }*/
?>