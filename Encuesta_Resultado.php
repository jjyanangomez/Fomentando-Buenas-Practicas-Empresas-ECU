<?php 
     include("dll/obtenerjson.php");
     $obtenerJson = new Encuesta();
     include("dll/database.php");
     $conexion = new Database();
     $URL = "https://survey123.arcgis.com/share/828a14a2074847899a525923a82b5b5e";
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
<body onload ="//openModelPDF('<?php echo $URL?>')" id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

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
     <section>
         <?php 
            $cadena = file_get_contents("https://services9.arcgis.com/2YA05qh4jhRDhuXH/arcgis/rest/services/survey123_828a14a2074847899a525923a82b5b5e/FeatureServer/0/query?outFields=*&where=1%3D1&f=json");
            $json = json_decode($cadena,true);
            $row1 =$json["features"];
            $numero = 0;
            
            for ($i=0; $i < sizeof($row1); $i++) {
                if(1790864316001 == $row1[$i]["attributes"]["_2_ruc"]){
                    $numero = $i;
                    break;
                }

                //echo $row[$i]["attributes"]["objectid"],"<br>";
            }
            $Indicadores = $conexion->readConsulta("SELECT * FROM Indicadores");
            $IndicadoresEthos = $conexion->readConsulta("SELECT * FROM Indicadores_Ethos");
            $SubIndicadores = $conexion->readConsulta("SELECT * FROM Sub_Indicadores");
            $contIndi = 0;
            $arrayGeneral = [];
            $arrayAux = [];
            while($row=mysqli_fetch_object($IndicadoresEthos)){
                $Id_Indi_Ethos=$row->Id_indi_Ethos;
                $Nombre_ind_Ethos=$row->Nombre_Indi_Ethos;                             
                $arrIndicadoresEthosID[] = $Id_Indi_Ethos;
            }
            
            for ($j=0; $j < sizeof($arrIndicadoresEthosID)-1 ; $j++) { 
                $SubIndi_ethos = $conexion->readConsulta("SELECT * FROM Indicadores WHERE Id_indi_Ethos = $arrIndicadoresEthosID[$j]");
                while($row=mysqli_fetch_object($SubIndi_ethos)){
                    $Id_ind=$row->Id_indicador;
                    $Nombre_ind=$row->Nombre_Indicador;
                    $Id_ind_ethos=$row->Id_indi_Ethos;
                    $Indicadoresid[] = $Id_ind;
                    //echo $Nombre_ind;
                }
                echo sizeof($Indicadoresid),"<br>";
                echo $arrIndicadoresEthosID[0],"--<br>";
                echo $Indicadoresid[0],"--<br>";
                $Nombre_sub_alternoArr = [];
                for ($k=0; $k < sizeof($Indicadoresid) ; $k++) {
                    $sql = "SELECT s.* FROM Indicadores i,Indicadores_Ethos e, Sub_Indicadores s WHERE i.Id_indi_Ethos = e.Id_indi_Ethos AND s.Id_Indicador = i.Id_indicador AND e.Id_indi_Ethos = $arrIndicadoresEthosID[$j] AND i.Id_indicador = $Indicadoresid[$k]";
                    $SubIndicadores_Prueba = $conexion->readConsulta($sql);
                    //echo $sql;
                    while($row=mysqli_fetch_object($SubIndicadores_Prueba)){
                        $Id_sub_indi=$row->Id_sub_indi;
                        $Nombre_sub_indi=$row->Nombre_sub_indi;
                        $Nombre_sub_alterno=$row->Nombre_sub_alterno;
                        $Indicador_Encuesta=$row->Indicador_Encuesta;
                        $Id_Indicador=$row->Id_Indicador;
                        $Nombre_sub_alternoArr[] = $Nombre_sub_alterno;
                    }
                    echo "--------ETHOS---$arrIndicadoresEthosID[$j]----------------<br>";
                    for ($l=0; $l < sizeof($Nombre_sub_alternoArr) ; $l++) { 
                        echo $Nombre_sub_alternoArr[$l],"<br>";
                        if($row1[$numero]["attributes"][$Nombre_sub_alternoArr[$l]] =="si" || $row1[$numero]["attributes"][$Nombre_sub_alternoArr[$l]] =="si_"){
                            $contIndi=$contIndi+1;
                        }
                    }
                    $valor = 100/sizeof($Nombre_sub_alternoArr);
                    $aux = $contIndi*$valor;
                    echo $contIndi,"<br>";
                    echo "Porcentaje: $aux","<br>";
                    $arrayAux[] = $aux;
                    $Nombre_sub_alternoArr = array_diff($Nombre_sub_alternoArr,$Nombre_sub_alternoArr);
                    $contIndi=0;
                }
                $arrayGeneral[] = $arrayAux;
                $arrayAux = array_diff($arrayAux,$arrayAux);
                $Indicadoresid = array_diff($Indicadoresid,$Indicadoresid);
            }
            $array = $row1[$numero]["attributes"]["_2_ruc"];
            echo $array,"<br>";
            echo $row1[$numero]["attributes"]["_1_aplica_la_responsabilidad_so"],"<br>";
            for ($i=0; $i < sizeof($arrayGeneral); $i++) { 
                echo $arrayGeneral[$i][0],"<br>";
            }
        ?>

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
     <script>
          function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src',''+url);
                            }
     </script>
</body>
</html>