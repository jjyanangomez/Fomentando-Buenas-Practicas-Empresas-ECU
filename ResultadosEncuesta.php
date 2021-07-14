<?php 
     include("dll/obtenerjson.php");
     $obtenerJson = new Encuesta();
     include("dll/database.php");
     $conexion = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Resultado Encuesta</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link rel="stylesheet" href="./css/estilos.css">

     <!-- favicon -->
     <link rel="shortcut icon" href="images/logoGCOMPANY.png" type="image/x-icon">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <div class="logo">
                       <!--  <img src="./images/logoGoodCompany.png" alt="" style="width: 20px; height:  50px"> -->
                         <img src="./images/logoGCOMPANY.png" alt="" style="width: 60px; height:  50px">
                    </div>
                   <!-- <a href="#" class="navbar-brand">GOOD COMPANY</a> -->
                   <a href="#" class="navbar-brand"> SUSTAINABLE COMPANY</a>
               </div>


               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="index.php#courses" class="smoothScroll">Información General</a></li>
                         <li><a href="index.php#team" class="smoothScroll">Archivos Relacionados</a></li>
                         <li><a href="index.php#about" class="smoothScroll">Autodiagnóstico</a></li>
                       <!--  <li><a href="#testimonial" class="smoothScroll">Reviews</a></li> -->
                         <li><a href="index.php#contact" class="smoothScroll">Contactos</a></li>
                    </ul>
                    
                    
               </div>

          </div>
     </section>
      <!-- Resultado Encuesta -->
      <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Videos<!--<small>Meet Professional Trainers</small>--></h2>
                          
                         </div>
                    </div>
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
                              <div class="col-md-3 col-sm-6">
                                   <div class="team-thumb">                       
                                        <div class="team-info">
                                            
                                              <!-- <p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                                                   <?php// echo $Id_ind;?> <p></p> <?php// echo $Nombre_ind?><p></p> <?php // echo $Id_ind_ethos?> </p>-->
                                        </div>
                                   
                                   </div>
                              </div>
                    <?php } ?>  

                    <?php 
                    
                         $arrIndicadoresEthos = [];
                         $arrIndicadoresEthosID = [];
                         $IndicadoresEthos = $conexion->readConsulta("SELECT * FROM Indicadores_Ethos");
                         while($row=mysqli_fetch_object($IndicadoresEthos)){
                              $Id_Indi_Ethos=$row->Id_indi_Ethos;
                              $Nombre_ind_Ethos=$row->Nombre_Indi_Ethos;                             
                              $arrIndicadoresEthosID[] = $Id_Indi_Ethos;
                              $arrIndicadoresEthos[] = $Nombre_ind_Ethos;
                              
                             ?>
                              <div class="col-md-3 col-sm-6">
                                   <div class="team-thumb">                       
                                        <div class="team-info">
                                            
                                            <!--   <p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                                                 <?php  // echo $Id_Indi_Ethos;?> <p></p> <?php // echo $Nombre_ind_Ethos?><p></p>  </p> -->
                                        </div>
                                   
                                   </div>
                              </div>
                   

                    <?php 
                    
                         $SubIndicadores = $conexion->readConsulta("SELECT * FROM Sub_Indicadores");
                         while($row=mysqli_fetch_object($SubIndicadores)){
                              $Id_sub_indi=$row->Id_sub_indi;
                              $Nombre_sub_indi=$row->Nombre_sub_indi;
                              $Nombre_sub_alterno=$row->Nombre_sub_alterno;
                              $Indicador_Encuesta=$row->Indicador_Encuesta;
                              $Id_Indicador=$row->Id_Indicador;                                       
                              ?>

                              <div class="col-md-3 col-sm-6">
                                   <div class="team-thumb">                       
                                        <div class="team-info">
                                            
                                           <!--   <p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"> -->
                                           <!--   <?php //echo $Id_sub_indi;?> <p></p> <?php //echo $Nombre_sub_indi?><p></p> <?php //echo $Nombre_sub_alterno?> <p></p>
                                              <?php //echo $Indicador_Encuesta?> <p></p> <?php //echo $Id_Indicador?></p> -->
                                        </div>
                                   
                                   </div>
                              </div>
                    <?php }  
                         }
                    ?>

                    <?php 
                     // var_dump("11111",$IndicadoresNombres);

                    
                     // var_dump("33333",$Indicadoresid);
                     //  var_dump("22222",$arrIndicadoresEthosID);
                    // echo $arrIndicadoresEthosID[0]; 
                   
                    /*$i = 0;
                   
                    while($Indicadoresid[$i] == "2" && $Indicadoresid[$i] == "2" ){


                         echo $IndicadoresNombres[$i];

                       $i++;
                    }*/


                    $labelIndicador1= [];
                    $labelIndicador2 = [];
                    $labelIndicador3 = [];
                    $labelIndicador4 = [];
                    $labelIndicador5 = [];
                    $labelIndicador6 = [];
                    $labelIndicador7 = [];
                   
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
                     
                     } 
       
                           ?>  
                    
                    <canvas id="myChart" width="100" height="100"></canvas>
                    <script>
                         var label1=<?php echo json_encode($labelIndicador1);?>;
                         var label2=<?php echo json_encode($labelIndicador2);?>;
                        

                         var ctx = document.getElementById('myChart').getContext('2d');
                         var myChart = new Chart(ctx, {
                              type: 'radar',
                               data: {
        labels: label1,
        labels1: label2,
        datasets: [{
            label: 
            "<?php echo $arrIndicadoresEthos[0]; ?>"
            ,
            data: [62, 80, 85, 93],
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
        },{
            label: 
            "<?php echo $arrIndicadoresEthos[1]; ?>"
            ,
            data: [62, 80, 85, 93],
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



                    
                    <?php 
                    $data = $obtenerJson -> leerJson();
                    $datos = print_r($data, true);
                    
                    $obtenerJson -> ObtenerAtributos($data);

                    //$obtenerJson->getObjectid() . "<br>";
                    
                    

                   // print($datos);
                   // echo $datos;

                   /* for ($i=0; $i < sizeof($data); $i++) { 
                   echo $data[$i]["attributes"]["objectid"],"<br>";
                    } 
                   */
                    ?>
          
               
               
        

               </div>

          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Redes Sociales</h2>
                              </div>
                              <address>
                                   <p>Puede seguirnos en nuestras redes sociales,<br> le invitamos a que nos siga</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 Sustainable Company</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Información de Contactos</h2>
                              </div>
                              <address>
                                   <p>+65 2244 1100, +66 1800 1100</p>
                                   <p><a href="Correo@utpl.edu.ec">correo@utpl.edu.ec</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Enlaces Rápidos</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class = "footer_img">
                              <img src="./images/UTPL1.png" alt="" style="width: 274.5px; height:  106.5px">
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
    
</body>
</html>