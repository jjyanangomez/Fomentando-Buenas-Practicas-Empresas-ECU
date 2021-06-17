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
     <link rel="stylesheet" href="css/styles.css">

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
                <h2 class="section-title">Administración de Videos</h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark" style=" margin:0 !important; background-color:#9dc15b; font-weight:bold;">
                            <tr style="margin:0 !important; font-weight:bold;">
                                <th class="col" style="width: 3%;">ID</th>
                                <th class="col" style="width: 15%;">Título</th>
                                <th class="col" style="width: 15%;">Link del Video</th>
                                <th class="col" style="width: 20%;">Descripción</th>
                                <th class="col" style="width: 10%;">Fecha de publicación</th>
                                <th class="col" style="width: 8%;">Editar</th>
                                <th class="col" style="width: 8%;">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php 
                                $Videos = $conexion->readConsulta("SELECT * FROM recursos_audiovisuales");
                                while($row=mysqli_fetch_object($Videos)){
                                    $Id=$row->IDrecurso_Audio;
                                    $Nombre=$row->Nombre;
                                    $Url=$row->URL;
                                    $Descripcion=$row->Descripcion;
                                    $Fecha=$row->Fecha_Creacion;?>
                                    <tr class="table" style="margin:0 !important; font-weight:bold;">
                                        <td class="col" style="width: 3%;"><?php echo $Id?></td>
                                        <td class="col" style="width: 15%;"><?php echo $Nombre?></td>
                                        <td class="col" style="width: 15%;"><?php echo $Url?></td>
                                        <td class="col" style="width: 22%;"><?php echo $Descripcion?></td>
                                        <td class="col" style="width: 10%;"><?php echo $Fecha?></td>
                                        <td class="col" style="width: 8%;"><a class="btn btn-success" href="AdminitrarVideos.php?id_Video=<?php echo $Id?>&Editar#llenar"><img class="icono_pen" src="./images/pen.png" alt=""width="25%"></a></td>
                                        <!--<td class="col" style="width: 8%;"><a class="btn btn-danger" href="dll/metodos.php?id_Video=<?php echo $Id?>&Eliminar"><img class = "icono_delete" src="./images/delete.png" alt=""width="25%"></a></td>-->
                                        <td class="col" style="width: 8%;"><a class="btn btn-danger" href="#" onclick="preguntar(<?php echo $Id?>)"><img class = "icono_delete" src="./images/delete.png" alt=""width="25%"></a></td>
                                    </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php
                    if(isset($_GET["id_Video"]) && isset($_GET["Editar"])){
                        $id_AV = $_GET["id_Video"];
                        $consulta = $conexion->readOne("recursos_audiovisuales",$id_AV);
                        $row = mysqli_fetch_object($consulta);
                        $Nombre_AV=$row->Nombre;
                        $Url_AV=$row->URL;
                        $Descripcion_AV=$row->Descripcion;
                        $Fecha_AV=$row->Fecha_Creacion;
                        echo "<div id='llenar'  class='col-md-offset-1 col-md-4 col-sm-12'>
                            <form action='./dll/metodos.php?id=$id_AV' method='POST'>
                            <h3  class='section-title'>Actualizar video $id_AV</h3>
                            <input type='text' name='titulo' class='form-control' placeholder='Ingrese el titulo del video' required='' value ='$Nombre_AV'>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='text' name='Url' class='form-control' placeholder='Ingrese la URL del video' required='' value ='$Url_AV'>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='text' name='Descripcion' class='form-control' placeholder='Descripción' required='' value ='$Descripcion_AV'>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='text' id='Fecha' name='Fecha' class='form-control' placeholder='Fecha de creación del video' required='' value ='$Fecha_AV'>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='submit' class='submit-btn form-control' style= background-color:#9dc15b value='Actualizar' name='Actualizar'>
                        </form>
                    </div>";
                    }else{
                        echo "<div class='col-md-offset-1 col-md-4 col-sm-12'>
                            <form action='./dll/metodos.php' method='POST'>
                            <h3 class='section-title'>Agregar video</h3>
                            <input type='text' name='titulo' class='form-control' placeholder='Ingrese el titulo del video' required=''>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='text' name='Url' class='form-control' placeholder='Ingrese la URL del video' required=''>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='text' name='Descripcion' class='form-control' placeholder='Descripción' required=''>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='text' id='Fecha' name='Fecha' class='form-control' placeholder='Fecha de creación del video' required=''>
                            <div class='div-table-cell' style='width: 4%;'></div>
                            <input type='submit' class='submit-btn form-control' style= background-color:#9dc15b value='Agregar' name='Agregar'>
                        </form>
                    </div>";
                    }
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
     <script type="text/javascript">
        function preguntar(id){
            if(confirm("Esta seguro que desea Eliminar este Campo: ")){
                window.location.href = "dll/metodos.php?id_Video="+id+"&Eliminar";
            }

        }

        ;  
     </script>

</body>
</html>