<?php
    include("obtenerjson.php");
    $obtenerJson = new Encuesta();
    include("database.php");
    $conexion = new Database();
    $URL = "https://survey123.arcgis.com/share/828a14a2074847899a525923a82b5b5e";

	    $NomRuc = (int) $_POST["Ruc"];

		//echo $NomRuc;
?>

    <?php 

        $Indicadoresid = [];
        $IndicadoresNombres = [];
        $Indicadores = $conexion->readConsulta("SELECT * FROM Indicadores");
        while($row=mysqli_fetch_object($Indicadores)){
            $Id_ind=$row->Id_indicador;
            $Nombre_ind=$row->Nombre_Indicador;
            $Id_ind_ethos=$row->Id_indi_Ethos;

            $Indicadoresid[] = $Id_ind_ethos;
            $IndicadoresNombres[] = $Nombre_ind;

    ?>
                
    <?php } ?>  

    <?php 
    
            $arrIndicadoresEthos = [];
            $arrIndicadoresEthosID_aux = [];
            $IndicadoresEthos = $conexion->readConsulta("SELECT * FROM Indicadores_Ethos");
            while($row=mysqli_fetch_object($IndicadoresEthos)){
                $Id_Indi_Ethos=$row->Id_indi_Ethos;
                $Nombre_ind_Ethos=$row->Nombre_Indi_Ethos;                             
                $arrIndicadoresEthosID_aux[] = $Id_Indi_Ethos;
                $arrIndicadoresEthos[] = $Nombre_ind_Ethos;
                
                ?>
                
    

    <?php 
    
            $SubIndicadores = $conexion->readConsulta("SELECT * FROM Sub_Indicadores");
            while($row=mysqli_fetch_object($SubIndicadores)){
                $Id_sub_indi=$row->Id_sub_indi;
                $Nombre_sub_indi=$row->Nombre_sub_indi;
                $Nombre_sub_alterno=$row->Nombre_sub_alterno;
                $Indicador_Encuesta=$row->Indicador_Encuesta;
                $Id_Indicador=$row->Id_Indicador;                                       
                ?>

                
    <?php }  
            }
    ?>
    <!-- Lectura del json obtencion de datos y analisis del mismo -->
    <?php
        $row1 = $obtenerJson -> leerJson();
        $numero = 0;
        for ($i=0; $i < sizeof($row1); $i++) {
            if($NomRuc == $row1[$i]["attributes"]["_2_ruc"]){
                $numero = $i;
                break;
            }
        }
        $contIndi = 0;
        $arrayGeneral = [];
        $arrayAux = [];
        while($row=mysqli_fetch_object($IndicadoresEthos)){
            $Id_Indi_Ethos=$row->Id_indi_Ethos;
            $Nombre_ind_Ethos=$row->Nombre_Indi_Ethos;                             
            $arrIndicadoresEthosID_aux[] = $Id_Indi_Ethos;
        }
        
        for ($j=0; $j < sizeof($arrIndicadoresEthosID_aux)-1 ; $j++) { 
            $SubIndi_ethos = $conexion->readConsulta("SELECT * FROM Indicadores WHERE Id_indi_Ethos = $arrIndicadoresEthosID_aux[$j]");
            while($row=mysqli_fetch_object($SubIndi_ethos)){
                $Id_ind=$row->Id_indicador;
                $Nombre_ind=$row->Nombre_Indicador;
                $Id_ind_ethos=$row->Id_indi_Ethos;
                $Indicadoresid_aux[] = $Id_ind;
                //echo $Nombre_ind;
            }
            //echo sizeof($Indicadoresid_aux),"<br>";
            //echo $arrIndicadoresEthosID_aux[0],"--<br>";
            //echo $Indicadoresid_aux[0],"--<br>";
            $Nombre_sub_alternoArr = [];
            for ($k=0; $k < sizeof($Indicadoresid_aux) ; $k++) {
                $sql = "SELECT s.* FROM Indicadores i,Indicadores_Ethos e, Sub_Indicadores s WHERE i.Id_indi_Ethos = e.Id_indi_Ethos AND s.Id_Indicador = i.Id_indicador AND e.Id_indi_Ethos = $arrIndicadoresEthosID_aux[$j] AND i.Id_indicador = $Indicadoresid_aux[$k]";
                $SubIndicadores_Prueba = $conexion->readConsulta($sql);
                ////echo $sql;
                while($row=mysqli_fetch_object($SubIndicadores_Prueba)){
                    $Id_sub_indi=$row->Id_sub_indi;
                    $Nombre_sub_indi=$row->Nombre_sub_indi;
                    $Nombre_sub_alterno=$row->Nombre_sub_alterno;
                    $Indicador_Encuesta=$row->Indicador_Encuesta;
                    $Id_Indicador=$row->Id_Indicador;
                    $Nombre_sub_alternoArr[] = $Nombre_sub_alterno;
                }
                //echo "--------ETHOS---$arrIndicadoresEthosID_aux[$j]----------------<br>";
                for ($l=0; $l < sizeof($Nombre_sub_alternoArr) ; $l++) { 
                    //echo $Nombre_sub_alternoArr[$l],"<br>";
                    if($row1[$numero]["attributes"][$Nombre_sub_alternoArr[$l]] =="si" || $row1[$numero]["attributes"][$Nombre_sub_alternoArr[$l]] =="si_"){
                        $contIndi=$contIndi+1;
                    }
                }
                $valor = 100/sizeof($Nombre_sub_alternoArr);
                $aux = $contIndi*$valor;
                //echo $contIndi,"<br>";
                //echo "Porcentaje: $aux","<br>";
                $arrayAux[] = $aux;
                $Nombre_sub_alternoArr = array_diff($Nombre_sub_alternoArr,$Nombre_sub_alternoArr);
                $contIndi=0;
            }
            $arrayGeneral[] = $arrayAux;
            $arrayAux = array_diff($arrayAux,$arrayAux);
            $Indicadoresid_aux = array_diff($Indicadoresid_aux,$Indicadoresid_aux);
        }
        $array = $row1[$numero]["attributes"]["_2_ruc"];
        //echo $array,"<br>";
        //echo $row1[$numero]["attributes"]["_1_aplica_la_responsabilidad_so"],"<br>";
        $dataIndicador1= [];
        $dataIndicador2= [];
        $dataIndicador3= [];
        $dataIndicador4= [];
        $dataIndicador5= [];
        $dataIndicador6= [];
        $dataIndicador7= [];
        for ($i=0; $i < sizeof($arrayGeneral[0]); $i++) { 
            //echo "//";
            //echo $arrayGeneral[0][$i],"<br>";
            $dataIndicador1[] = $arrayGeneral[0][$i];

        }
        for ($i=0; $i < sizeof($arrayGeneral[1]); $i++) { 
            //echo "//";
            //echo $arrayGeneral[0][$i],"<br>";
            $dataIndicador2[] = $arrayGeneral[1][$i];

        }
        for ($i=0; $i < sizeof($arrayGeneral[2]); $i++) { 
            //echo "//";
            //echo $arrayGeneral[0][$i],"<br>";
            $dataIndicador3[] = $arrayGeneral[2][$i];

        }
        for ($i=0; $i < sizeof($arrayGeneral[3]); $i++) { 
            //echo "//";
            //echo $arrayGeneral[0][$i],"<br>";
            $dataIndicador4[] = $arrayGeneral[3][$i];

        }
        for ($i=0; $i < sizeof($arrayGeneral[4]); $i++) { 
            
            $dataIndicador5[] = $arrayGeneral[4][$i];

        }
        for ($i=0; $i < sizeof($arrayGeneral[5]); $i++) { 
            
            $dataIndicador6[] = $arrayGeneral[5][$i];

        }
        for ($i=0; $i < sizeof($arrayGeneral[6]); $i++) { 
            
            $dataIndicador7[] = $arrayGeneral[6][$i];

        }

    ?>
    <?php 
    

    $labelIndicador1= [];
    $labelIndicador2 = [];
    $labelIndicador3 = [];
    $labelIndicador4 = [];
    $labelIndicador5 = [];
    $labelIndicador6 = [];
    $labelIndicador7 = [];
    $labelIndicador8 = [];
    
    
        for($i=0; $i < count($Indicadoresid); $i++){
        

    if($Indicadoresid[$i] == "1" && $Indicadoresid[$i] == "1"){                          
                $labelIndicador1[] = $IndicadoresNombres[$i];                                      
    }
    if($Indicadoresid[$i] == "2" && $Indicadoresid[$i] == "2"){                          
                $labelIndicador2[] = $IndicadoresNombres[$i];                                   
    }
    if($Indicadoresid[$i] == "3" && $Indicadoresid[$i] == "3"){                          
                $labelIndicador3[] = $IndicadoresNombres[$i];                                     
    }
    if($Indicadoresid[$i] == "4" && $Indicadoresid[$i] == "4"){                          
                $labelIndicador4[] = $IndicadoresNombres[$i];                                    
    }
    if($Indicadoresid[$i] == "5" && $Indicadoresid[$i] == "5"){                          
                $labelIndicador5[] = $IndicadoresNombres[$i];                                     
    }
    if($Indicadoresid[$i] == "6" && $Indicadoresid[$i] == "6"){                          
                $labelIndicador6[] = $IndicadoresNombres[$i];                                       
    }
    if($Indicadoresid[$i] == "7" && $Indicadoresid[$i] == "7"){                          
                $labelIndicador7[] = $IndicadoresNombres[$i];                                     
    }
    if($Indicadoresid[$i] == "8" && $Indicadoresid[$i] == "8"){                          
            $labelIndicador8[] = $IndicadoresNombres[$i];                                     
    }
        
        } 
            ?> 
    <?php echo "<section class = 'card' id='team'>
          <div class='container'>
               <div class='row'>
                           
                    <div class='col-md-12 col-sm-12'>
                         <div class='section-title'>
                              <h2>Resultado Encuesta ADEC-ETHOS</h2>
                              <p class='text-justify'>Los Indicadores ADEC-ETHOS son una herramienta de aprendizaje y evaluación de la gestión de las empresas que refieren a la incorporación de prácticas de responsabilidad social, al planeamiento estratégico, al monitoreo y desempeño general en la empresa.</p>
                              <div class='card-body'>

                                   <div class='row'>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart' width='100' height='100'></canvas>

                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart2' width='100' height='100'></canvas>
                                             
                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart3' width='100' height='100'></canvas>

                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart4' width='100' height='100'></canvas>

                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart5' width='100' height='100'></canvas>

                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart6' width='100' height='100'></canvas>

                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart7' width='100' height='100'></canvas>

                                        </div>
                                        <div class='col-lg-6'>
                                             <canvas id='myChart8' width='100' height='100'></canvas>

                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>      
            
               </div>

          </div>
     </section>"
?>
<script>
                         var label1=<?php echo json_encode($labelIndicador1);?>;
                         var label2=<?php echo json_encode($labelIndicador2);?>;
                         var label3=<?php echo json_encode($labelIndicador3);?>;
                         var label4=<?php echo json_encode($labelIndicador4);?>;
                         var label5=<?php echo json_encode($labelIndicador5);?>;
                         var label6=<?php echo json_encode($labelIndicador6);?>;
                         var label7=<?php echo json_encode($labelIndicador7);?>;
                         var label8=<?php echo json_encode($labelIndicador8);?>;
                         var datas1=<?php echo json_encode($dataIndicador1);?>;
                         var datas2=<?php echo json_encode($dataIndicador2);?>;
                         var datas3=<?php echo json_encode($dataIndicador3);?>;
                         var datas4=<?php echo json_encode($dataIndicador4);?>;
                         var datas5=<?php echo json_encode($dataIndicador5);?>;
                         var datas6=<?php echo json_encode($dataIndicador6);?>;
                         var datas7=<?php echo json_encode($dataIndicador7);?>;
                         
                        console.log(datas4);

                         var ctx = document.getElementById('myChart').getContext('2d');
                         var ctx2 = document.getElementById('myChart2').getContext('2d');
                         var ctx3 = document.getElementById('myChart3').getContext('2d');
                         var ctx4 = document.getElementById('myChart4').getContext('2d');
                         var ctx5 = document.getElementById('myChart5').getContext('2d');
                         var ctx6 = document.getElementById('myChart6').getContext('2d');
                         var ctx7 = document.getElementById('myChart7').getContext('2d');
                         var ctx8 = document.getElementById('myChart8').getContext('2d');


                         var myChart = new Chart(ctx, {
                              type: 'radar',
                               data: {
       
         labels: label1, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[0]; ?>"
            ,
            data: datas1,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


var myChart2 = new Chart(ctx2, {
                              type: 'radar',
                               data: {
       
         labels: label2, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[1]; ?>"
            ,
            data: datas2,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var myChart3 = new Chart(ctx3, {
                              type: 'radar',
                               data: {
       
         labels: label3, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[2]; ?>"
            ,
            data: datas3,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var myChart4 = new Chart(ctx4, {
                              type: 'radar',
                               data: {
       
         labels: label4, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[3]; ?>"
            ,
            data: datas4,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var myChart5 = new Chart(ctx5, {
                              type: 'radar',
                               data: {
       
         labels: label5, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[4]; ?>"
            ,
            data: datas5,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var myChart6 = new Chart(ctx6, {
                              type: 'radar',
                               data: {
       
         labels: label6, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[5]; ?>"
            ,
            data: datas6,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var myChart7 = new Chart(ctx7, {
                              type: 'radar',
                               data: {
       
         labels: label7, 
        datasets: [{
           
            label: 
            "<?php echo $arrIndicadoresEthos[6]; ?>"
            ,
            data: datas7,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
        
        ]


    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
