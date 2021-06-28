<?php 
     include("dll/database.php");
     $conexion = new Database();

?>
<!DOCTYPE html>
<html lang="en">
<head>


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
                    <li><a href="./Administrador.html" class="smoothScroll">Inicio</a></li>
                         <li><a href="#team" class="smoothScroll">Administración de Archivos</a></li>
                         <li><a href="./AdminitrarVideos.php" class="smoothScroll">Videos</a></li>
                         <li><a href="./AdminitrarInfografias.php" class="smoothScroll">Infografias</a></li>
                       <!--  <li><a href="#testimonial" class="smoothScroll">Reviews</a></li> -->
                         <li><a href="./AdminitrarRecurso.php" class="smoothScroll">Recursos</a></li>
                    </ul>

                    <ul class=" navbar-right" style="margin-top: 16px">
                         <li><a class="btn btn-danger" href="#">Salir</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!--FormularioVideo-->
     <section id="team">
        <div class="container">
          <div class="row">
               <h2 class="section-title">Administración de Recursos</h2>
               <?php 
                    if(isset($_GET["id_Recurso"]) && isset($_GET["Editar"])){
                         $id_Re = $_GET["id_Recurso"];
                         $consulta = $conexion->readOne("SELECT * FROM recursos_digitales WHERE IdRecurso_Digital=$id_Re");
                         $row = mysqli_fetch_object($consulta);
                         $Nombre = $row->Nombre;
                         $Archivo = $row->Archivo;
                         $Fecha = $row->Fecha_Creacion;
                         echo "<!--IngresarRecurso-->
                         <div class='col-md-offset-1 col-md-4 col-sm-12'>
                             <form action='./dll/metodos.php?id=$id_Re' method='POST' enctype=multipart/form-data >
                                 <h3 class='section-title'>Actualizar Recurso $id_Re</h3>
                                 <input type='text' name='Nombre' class='form-control' placeholder='Ingrese el nombre del recurso' required='' value='$Nombre'>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <select type ='select' name='Tipo' class='form-control' style= background-color:#e4e8dc>
                                             <option value='.pdf'>.pdf</option>
                                             <option value='.doc'>.doc</option>
                                         </select>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <button class='submit-btn form-control' style= background-color:#87cbf5 >Subir Archivo</button>                   
                                 <input type='file' name='archivo' class='form-control' required=''>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <input type='text' id='Fecha' name='Fecha' class='form-control' placeholder='Fecha de creación del recurso' required='' value='$Fecha'>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <button class='submit-btn form-control' style= background-color:#9dc15b id='form-submit' name='ActualizarRecurso'>Actualizar</button>
                             </form>
                         </div>";
                    }else{
                         echo "<!--IngresarRecurso-->
                         <div class='col-md-offset-1 col-md-4 col-sm-12'>
                             <form action='./dll/metodos.php' method='POST' enctype=multipart/form-data >
                                 <h3 class='section-title'>Agregar Recurso</h3>
                                 <input type='text' name='Nombre' class='form-control' placeholder='Ingrese el nombre del recurso' required=''>
                                 <div class='div-table-cell' style='width: 4%;'></div>
         
                                 <select type ='select' name='Tipo' class='form-control' style= background-color:#e4e8dc>
                                             <option value='.pdf'>.pdf</option>
                                             <option value='.doc'>.doc</option>
                                         </select>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <button class='submit-btn form-control' style= background-color:#87cbf5>Subir Archivo</button>                   
                                 <input type='file' name='archivo' class='form-control' required=''>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <input type='text' id='Fecha' name='Fecha' class='form-control' placeholder='Fecha de creación del recurso' required=''>
                                 <div class='div-table-cell' style='width: 4%;'></div>
                                 <button class='submit-btn form-control' style= background-color:#9dc15b id='form-submit' name='AgregarRecurso'>Agregar</button>
                             </form>
                         </div>";
                    }
               ?>
          </div>
            <div class="row">
               <h2 class="section-title">Tabla de Recursos</h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark" style=" margin:0 !important; background-color:#9dc15b; font-weight:bold;">
                            <tr style="margin:0 !important; font-weight:bold;">
                                <th class="col" style="width: 3%;">ID</th>
                                <th class="col" style="width: 15%;">Nombre del Recurso</th>
                                <th class="col" style="width: 15%;">Tipo</th>
                                <th class="col" style="width: 20%;">URL</th>
                                <th class="col" style="width: 10%;">Fecha de publicación</th>
                                <th class="col" style="width: 7%;">Editar</th>
                                <th class="col" style="width: 7%;">Eliminar</th>
                                <th class="col" style="width: 7%;">Ver Archivo</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php 
                         
                                $Recursos = $conexion->readConsulta("SELECT * FROM recursos_digitales");
                                while($row=mysqli_fetch_object($Recursos)){                                  
                                    $ID=$row->IdRecurso_Digital;                       
                                    $Nombre=$row->Nombre;                              
                                    $Tipo=$row->Tipo;                               
                                    $Archivo=$row->Archivo;                              
                                    $Fecha=$row->Fecha_Creacion;?>

                                    <tr class="table" style="margin:0 !important; font-weight:bold;">
                                        <td class="col" style="width: 3%;"><?php echo $ID?></td>
                                        <td class="col" style="width: 15%;"><?php echo $Nombre?></td>
                                        <td class="col" style="width: 15%;"><?php echo $Tipo?></td>
                                        <td class="col" style="width: 20%;"><?php echo $Archivo?></td>
                                        <td class="col" style="width: 10%;"><?php echo $Fecha?></td>
                                        <td class="col" style="width: 7%;"><a class="btn btn-success" href="AdminitrarRecurso.php?id_Recurso=<?php echo $ID?>&Editar"><img class="icono_pen" src="./images/pen.png" alt=""width="25%"></a></td>
                                        <td class="col" style="width: 8%;"><a class="btn btn-danger" href="#" onclick="preguntar(<?php echo $Id?>)"><img class = "icono_delete" src="./images/delete.png" alt=""width="25%"></a></td>
                                        <td class="col" style="width: 7%;"><a class="submit-btn form-control" style= background-color:#cfd4d7 target = "_black" href="./<?php echo  $Archivo; ?>" >Ver</a></td>
                                    </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
     </section>
     <section id="Completar">
               <div class="row">
                    
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
                window.location.href = "dll/metodos.php?id_Recurso="+id+"&Eliminar";
            }
        }
        ;  
     </script>

</body>
</html>