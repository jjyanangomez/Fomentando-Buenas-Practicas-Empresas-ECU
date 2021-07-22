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
        <div class="container">
            <div class="row">
                <h2>Buscar RUC</h2>
                <div class="col-md-offset-1 col-md-4 col-sm-12">  
                    <form  method="post" onsubmit = "return enviar();">
                        <input type="text" name="Ruc" id="Ruc" class="form-control" placeholder="RUC de la empresa:" required="">  
                        <div class='div-table-cell' style='width: 4%;'></div>                                                           
                        <input type='submit' class='submit-btn form-control' style= background-color:#9dc15b value='Enviar' name='Enviar'>
                        <div class='div-table-cell' style='width: 4%;'></div>
                    </form>
                </div>
            </div>

        </div>
        
      </section>
     <section id = "respa"></section>

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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>
          function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src',''+url);
                            }
     </script>
     <script>
          function enviar(){
              var ruc = document.getElementById("Ruc").value;
              var dataen = "Ruc="+ruc;
              $.ajax({
                type:"post",
                url:"dll/prueba.php",
                data:dataen,
                success:function(resp){
                    $("#respa").html(resp);
                }
              });
              return false;
          }
      </script>
</body>
</html>