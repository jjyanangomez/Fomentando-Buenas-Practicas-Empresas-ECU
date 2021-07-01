<?php 
     include("dll/database.php");
     $conexion = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>SUSTAINABLE COMPANY</title>
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
                         <li><a href="#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="#courses" class="smoothScroll">Información General</a></li>
                         <li><a href="#team" class="smoothScroll">Archivos Relacionados</a></li>
                         <li><a href="#about" class="smoothScroll">Autodiagnóstico</a></li>
                       <!--  <li><a href="#testimonial" class="smoothScroll">Reviews</a></li> -->
                         <li><a href="#contact" class="smoothScroll">Contactos</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Revisa información sobre sostenibilidad</h1>
                                             <h3>Descripción sobre la distribución de esta página</h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Distribución de la página</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Puedes encontrar trabajos realizados por los estudiantes de la carrera de administración de empresas</h1>
                                             <h3>Recursos: Videos, Infografías o Documentos</h3>
                                             <a href="#courses" class="section-btn btn btn-default smoothScroll">Archivos Relacionados</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12"></div>
                                             <h1>Puede evaluar su empresa de acuerdo a la RCE</h1>
                                             <h3>Puedes obtener ayuda de acuerdo a los resultados de la encuesta realizada</h3>
                                             <!--<h3>enatis sollicitudin ut at libero. Visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>-->
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Dudas o sugerencias</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <!--<h3>Trending Courses</h3>-->
                              <h3>Información General</h3>
                              <p>Se podrá encontrar información general sobre las buenas prácticas de responsabilidad social en las empresas ecuatorianas.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <!--<h3>Books & Library</h3>-->
                              <h3>Encuesta</h3>
                              <p>En esta sección se podrá realizar una encuesta para poder evaluar a su empresa con respecto al RCE.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <!--<h3>Certified Teachers</h3>-->
                              <h3>Resultados</h3>
                              <p>Una ves que se halla evaluado su empresa se presentara informacion referente a los restados.</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Información General <!--<small>Upgrade your skills with newest courses</small>--></h2>
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
                              <h2>Archivos Relacionados<!--<small>Meet Professional Trainers</small>--></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/gifvideos1.gif" class="img-responsive" alt="" style="width: 344.5px; height:  251.5px">
                              </div>
                              <div class="team-info">
                                   <h3><a href="GaleriaVideos.php">Videos</a></h3>
                                   <span>Podra visualizar videos referentes a responsabilidad Social</span>
                              </div>
                              
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/infografia1-gif.gif" class="img-responsive" alt=""style="width: 344.5px; height:  251.5px">
                              </div>
                              <div class="team-info">
                                   <h3><a href="GaleriaInfografia.php">Infografías</a></h3>
                                   <span>Podra visualizar infografias referentes a responsabilidad Social</span>
                              </div>
                             
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/informes1.gif" class="img-responsive" alt=""style="width: 274.5px; height:  262.5px" >
                              </div>
                              <div class="team-info">
                                   <h3><a href="GaleriaRecursos.php">Recursos</a></h3>
                                   <span>Podra visualizar archivos referentes a responsabilidad Social</span>
                              </div>
                             
                         </div>
                    </div>

                    

               </div>
          </div>
     </section>


     

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="section-title">
                              <h2>Autodiagnóstico<!--<small>Meet Professional Trainers</small>--></h2>
                         </div>
                         <div class="about-info">
                              <h2>Con estos pasos podrá evaluar su empresa de acuerdo a la RCE</h2>

                              <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Registrarse</h3>
                                        <p>Registre sus datos para realizar la encuesta</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>Realizar encuesta</h3>
                                        <p>Complete la encuesta con normas de acuerdo a la RCE</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Resultados</h3>
                                        <p>Se mostrara los resultados de su empresa evaluada de acuerdo al RCE</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>Regístrese aquí</h2>
                                   <input type="text" name="nombre Empresa" class="form-control" placeholder="Nombre de la empresa:" required="">
                                   <input type="text" name="RUC" class="form-control" placeholder="Ruc:" required="">
                                   <input type="text" name="nombre Representante" class="form-control" placeholder="Nombre del representante:" required="">
                                   <input type="email" name="email" class="form-control" placeholder="Correo electrónico:" required="">
                                  
                                   <select id ="Provincia"  type ="select" name="Provincia" class="form-control">
                                        <?php 
                                        $provincias =$conexion->readConsulta("SELECT * FROM provincias");
                                        echo "<option value='0'>Seleccionar la Provincia</option>";
                                        while($row=mysqli_fetch_object($provincias)){
                                             $id=$row->IDProvincias;
                                             $nombreP = $row->Provincia;?>
                                             <option value= <?php echo $id?>><?php echo $nombreP?></option>
                                        <?php } ?>
                                </select>
                                <select id = "Canton" type ="select" name="Canton" class="form-control">
                                </select>
                                   <button class="submit-btn form-control" id="form-submit">Iniciar Encuesta</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="./dll/Correo.php" method="post">
                              <div class="section-title">
                                   <h2>Contactos<small>Si tiene una consulta o sugerencia la puede deja en este apartado</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Ingrese su nombre" name="nombre" required="">
                    
                                   <input type="email" class="form-control" placeholder="Ingrese su correo" name="correo" required="">

                                   <textarea class="form-control" rows="6" placeholder="Dejanos tu mensaje" name="mensaje" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="Mensaje" value="Enviar Mensaje">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact.jpg" class="img-responsive" alt="Smiling Two Girls">
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
		
     <script language="javascript">
          $(document).ready(function(){
               $("#Provincia").change(function () {
                    $("#Provincia option:selected").each(function () {
                         id_Provincia = $(this).val();
                         $.post("dll/getCantones.php", { id_Provincia: id_Provincia }, function(data){
                              $("#Canton").html(data);
                         });            
                    });
               })
          });
     </script>

</body>
</html>