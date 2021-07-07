<?php 
     include("dll/database.php");
     $conexion = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>GALERIA INFOGRAFIAS</title>
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

     <!-- favicon -->
     <link rel="shortcut icon" href="images/logoGCOMPANY.png" type="image/x-icon">

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
     <!-- Infografias -->


     <section id="team">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Infografias<!--<small>Meet Professional Trainers</small>--></h2>
                         </div>
                    </div>
                    <?php
                         $infografias = $conexion->readConsulta("SELECT * FROM recursos_infografia");
                         while($row=mysqli_fetch_object($infografias)){
                              $Id=$row->id_recurso_infografia;
                              $Nombre=$row->Titulo;
                              $Categoria=$row->Categoria;
                              $Url=$row->url;
                              $Extencion=$row->Extencion;
                              $Fecha=$row->Fecha_publicacion;
                              if ($Extencion == ".pdf"){?>
                                   <div class="col-md-3 col-sm-6">
                                        <div class="team-thumb">
                                             <div class="team-image">
                                                 
                                             </div>
                                             <div class="team-info" >
                                                  <embed src="./<?php echo $Url."#toolbar=0"?> " style="width:290px; height:280px; "></embed>
                                                  <h5  style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><a rel="stylesheet" href="./<?php echo $Url."#toolbar=0"?> " target="_blank" ><?php echo $Nombre?></a></h5>
                                                  <span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><b>Fecha publicacion: </b><?php echo $Fecha?></span>                                 
                                                  
                                                  
                                             </div>
                                        
                                        </div>
                                   </div>
                              <?php } ?>
                              <?php
                              if ($Extencion != ".pdf"){?>
                                   <div class="col-md-3 col-sm-6">
                                        <div class="team-thumb">
                                             <div class="team-image">
                                                 
                                             </div>
                                             <div class="team-info">
                                                  <h5 style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><a rel="stylesheet" href="./<?php echo $Url."#toolbar=0"?>" target="_blank"><?php echo $Nombre?></a></h5>
                                                  <span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><b>Fecha publicacion: </b><?php echo $Fecha?></span>
                                             </div>
                                        
                                        </div>
                                   </div>
                              <?php } ?>                               
                    <?php } ?> 
                    

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