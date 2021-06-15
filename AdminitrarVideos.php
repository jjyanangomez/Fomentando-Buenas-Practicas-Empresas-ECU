<?php 
     include("dll/database.php");
     $conexion = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>ADMIN VIDEOS</title>
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
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

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
                         <li><a href="#courses" class="smoothScroll">Inicio</a></li>
                         <li><a href="#team" class="smoothScroll">Administración de Archivos</a></li>
                         <li><a href="#" class="smoothScroll">Videos</a></li>
                         <li><a href="#" class="smoothScroll">Infografias</a></li>
                       <!--  <li><a href="#testimonial" class="smoothScroll">Reviews</a></li> -->
                         <li><a href="#" class="smoothScroll">Recursos</a></li>
                    </ul>
               </div>

          </div>
     </section>
     <!--FormularioVideo-->
     <section id="team">
          <div class="container">
               <div class="row">
                    <div class="container-fluid">
                         <h2 class="section-title">Videos</h2>
                         <div class="table-responsive">
                             <div class="div-table" style="margin:0 !important;">
                                 <div class="div-table-row div-table-row-list" style="background-color:#9dc15b; font-weight:bold;">
                                     <div class="div-table-cell" style="width: 6%;">ID</div>
                                     <div class="div-table-cell" style="width: 22%;">Titulo</div>
                                     <div class="div-table-cell" style="width: 10%;">Link del Video</div>
                                     <div class="div-table-cell" style="width: 10%;">Descripción</div>
                                     <div class="div-table-cell" style="width: 10%;">Fecha de publicación</div>
                                     <div class="div-table-cell" style="width: 8%;">Editar</div>
                                     <div class="div-table-cell" style="width: 8%;">Eliminar</div>
                                 </div>
                             </div>
                         </div>
                         <div class="">
                             <div class="div-table" style="margin:0 !important;">
                                 <div class="div-table-row div-table-row-list">
                                     <div class="div-table-cell" style="width: 6%;">1</div>    
                                     <div class="div-table-cell" style="width: 22%;">Nombre de video</div>
                                     <div class="div-table-cell" style="width: 10%;">link--------------------</div>
                                     <div class="div-table-cell" style="width: 10%;">Esto es un video</div>
                                     <div class="div-table-cell" style="width: 10%;">09/06/2021</div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                                     </div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="">
                             <div class="div-table" style="margin:0 !important;">
                                 <div class="div-table-row div-table-row-list">
                                     <div class="div-table-cell" style="width: 6%;">1</div>    
                                     <div class="div-table-cell" style="width: 22%;">Nombre de video</div>
                                     <div class="div-table-cell" style="width: 10%;">link--------------------</div>
                                     <div class="div-table-cell" style="width: 10%;">Esto es un video</div>
                                     <div class="div-table-cell" style="width: 10%;">09/06/2021</div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                                     </div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="">
                             <div class="div-table" style="margin:0 !important;">
                                 <div class="div-table-row div-table-row-list">
                                     <div class="div-table-cell" style="width: 6%;">1</div>    
                                     <div class="div-table-cell" style="width: 22%;">Nombre de video</div>
                                     <div class="div-table-cell" style="width: 10%;">link--------------------</div>
                                     <div class="div-table-cell" style="width: 10%;">Esto es un video</div>
                                     <div class="div-table-cell" style="width: 10%;">09/06/2021</div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                                     </div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="">
                             <div class="div-table" style="margin:0 !important;">
                                 <div class="div-table-row div-table-row-list">
                                     <div class="div-table-cell" style="width: 6%;">1</div>    
                                     <div class="div-table-cell" style="width: 22%;">Nombre de video</div>
                                     <div class="div-table-cell" style="width: 10%;">link--------------------</div>
                                     <div class="div-table-cell" style="width: 10%;">Esto es un video</div>
                                     <div class="div-table-cell" style="width: 10%;">09/06/2021</div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                                     </div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="">
                             <div class="div-table" style="margin:0 !important;">
                                 <div class="div-table-row div-table-row-list">
                                     <div class="div-table-cell" style="width: 6%;">1</div>    
                                     <div class="div-table-cell" style="width: 22%;">Nombre de video</div>
                                     <div class="div-table-cell" style="width: 10%;">link--------------------</div>
                                     <div class="div-table-cell" style="width: 10%;">Esto es un video</div>
                                     <div class="div-table-cell" style="width: 10%;">09/06/2021</div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                                     </div>
                                     <div class="div-table-cell" style="width: 8%;">
                                         <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         
                              <form action="#" method="post"></form>
                              <h3 class="section-title">Agregar video</h3>
                                   <input type="text" name="titulo" class="form-control" placeholder="Ingrese el titulo del video" required="">
                                   <div class="div-table-cell" style="width: 4%;"></div>
                                   <input type="text" name="Url" class="form-control" placeholder="Ingrese la URL del video" required="">
                                   <div class="div-table-cell" style="width: 4%;"></div>
                                   <input type="text" name="Descripción" class="form-control" placeholder="Descripción" required="">
                                   <div class="div-table-cell" style="width: 4%;"></div>
                                   <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="Fecha de creación del video" required="">
                                   <div class="div-table-cell" style="width: 4%;"></div>
                                   <button class="submit-btn form-control" style= background-color:#9dc15b id="form-submit" >Agregar</button>

                              </form>
                         
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


     <script>  
          $(document).ready(function(){  
               $.datepicker.setDefaults({  
                    dateFormat: 'yy-mm-dd'   
               });  
               $(function(){  
                    $("#Fecha").datepicker();  
               });  
          });  
     </script>

</body>
</html>