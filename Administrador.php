<?php 
session_start();
if ($_SESSION['autenticado'] && $_SESSION['Usuario']) {


} else {
     echo "<script>location.href='./index-login.html'</script>";

}
     ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>ADMIN</title>
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

     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
     <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">

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
                         <li><a href="./Administrador.php" class="smoothScroll">Inicio</a></li>
                         <li><a href="#team" class="smoothScroll">Administración de Archivos</a></li>
                         <li><a href="./AdminitrarVideos.php" class="smoothScroll">Videos</a></li>
                         <li><a href="./AdminitrarInfografias.php" class="smoothScroll">Infografias</a></li>
                       <!--  <li><a href="#testimonial" class="smoothScroll">Reviews</a></li> -->
                         <li><a href="./AdminitrarRecurso.php" class="smoothScroll">Recursos</a></li>
                         <li><a href="./AdministrarUsuarios.php" class="smoothScroll">Usuarios</a></li>
                    </ul>

                   <ul class=" navbar-right" style="margin-top: 16px">
                         <a href= "salir.php" class="btn btn-danger" >Salir</a>
                    </ul>
               </div>

          </div>
     </section>

     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Administración   <!--<small>Upgrade your skills with newest courses</small>--></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/ARelacionados_1.png" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">INTRODUCCIÓN</a></h3>
                                                  <p>El concepto de lo que hoy se conoce como Responsabilidad Social Corporativa (RSC) ha
                                                     evolucionado por diferentes causas y desde diferentes perspectivas: éticas, políticas,
                                                     instrumentales e integradoras, en la percepción del individuo y por tanto de la sociedad. Esto ha
                                                     fortalecido paulatinamente los argumentos para implementar la RSC en las organizaciones
                                                     (Ortiz, 2013)</p>
                                             </div>

                                             <div class="courses-info">
                                                  <!--<div class="courses-author">
                                                       <img src="images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>-->
                                                  <div class="courses-price">
                                                       <a href="#"><span>Ver</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/ARelacionados_2.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">IMPORTANCIA</a></h3>
                                                  <p>El tema de la Responsabilidad Social es de gran importancia para la gestión y desarrollo de las
                                                  empresas, por cuanto permite establecer lineamientos efectivos sobre el buen uso de recursos
                                                  en procura de un desarrollo saludable de las organizaciones y su entorno.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <!--<div class="courses-author">
                                                       <img src="images/author-image2.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>-->
                                                  <div class="courses-price">
                                                       <a href="#"><span>Ver</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/ARelacionados_3.png" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">POTENCIAL DE LA INNOVACIÓN</a></h3>
                                                  <p>Las empresas a través de la página web tendrán acceso al conocimiento de la RSE y podrán
                                                  autodianosticar su situación actual frente a la RSE, y se pondrá a su alcance varias estrategias
                                                  generales sobre RSE. El indicador de medición será el número de empresas que se
                                                  autodianóstiquen y visiten la página web.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <!--<div class="courses-author">
                                                       <img src="images/author-image3.jpg" class="img-responsive" alt="">
                                                       <span>Catherine</span>
                                                  </div>-->
                                                  <div class="courses-price">
                                                       <a href="#"><span>Ver</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/ARelacionados_4.png" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">DESCRIPCIÓN DE LA PROPUESTA Y METODOLOGÍA</a></h3>
                                                  <p>Considerando que el aprendizaje basado en proyectos consiste en una modalidad de enseñanza
                                                  y aprendizaje centrada en tareas, un proceso compartido de negociación entre los participantes,
                                                  siendo su objetivo principal la obtención de un producto final. Este método promueve el
                                                  aprendizaje individual y autónomo dentro de un plan de trabajo definido por objetivos y
                                                  procedimientos.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <!--<div class="courses-author">
                                                       <img src="images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>-->
                                                  <div class="courses-price">
                                                       <a href="#"><span>Ver</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>

     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Administración de Archivos<!--<small>Meet Professional Trainers</small>--></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/gifvideos1.gif" class="img-responsive" alt="" style="width: 344.5px; height:  251.5px">
                              </div>
                              <div class="team-info">
                                   <h3>Videos</h3>
                                   <span>Descripción Videos:</span>
                              </div>
                              <div class="courses-price">
                                   <a href="AdminitrarVideos.php"><span>Editar</span></a>
                              </div>
                              
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/infografia1-gif.gif" class="img-responsive" alt=""style="width: 344.5px; height:  251.5px">
                              </div>
                              <div class="team-info">
                                   <h3>Infografías</h3>
                                   <span>Descripción Infografias:</span>
                              </div>
                              <div class="courses-price">
                                   <a href="AdminitrarInfografias.php"><span>Editar</span></a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/informes1.gif" class="img-responsive" alt=""style="width: 274.5px; height:  262.5px" >
                              </div>
                              <div class="team-info">
                                   <h3>Recursos</h3>
                                   <span>Descripción Recursos:</span>
                              </div>
                              <div class="courses-price">
                                   <a href="AdminitrarRecurso.php"><span>Editar</span></a>
                              </div>
                             
                         </div>
                    </div>

                    

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
                              <div class = "footer-LogoUTPL">
                                   <img src="./images/UTPL1.png" alt="" style="width: 274.5px; height:  106.5px">
                              </div>
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