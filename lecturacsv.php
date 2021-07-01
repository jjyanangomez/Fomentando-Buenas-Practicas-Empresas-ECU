<?php

$archivoCSV = "survey_0.csv";
$csv = leerCSV($archivoCSV);


function leerCSV($archivoCSV){
    $file_handle = fopen($archivoCSV, 'r');
    while(!feof($file_handle)){
      $linea_de_texto[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $linea_de_texto;
  }
  

  for($f=0; $f<count($csv); $f++){
    for($c=0; $c<count($csv[$f]); $c++){
      echo $csv[$f][$c],"\n";
    }
    echo "<br>\n";
  }
