<?php 
session_start();
if ($_SESSION['autenticado'] && $_SESSION['Usuario']) {


} else {
     echo "<script>location.href='./index-login.html'</script>";

}
?>
<?php 
     include("dll/database.php");
     $conexion = new Database();


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>ADMIN INFOGRAFIAS</title>
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
     <!--FormularioInfografia-->
     
     
     <section id="team">
        <div class="container">
             <div class="row">
               <h2 class="section-title">Administración de Usuarios</h2>
               <!--IngresarInfografia-->
               <?php 
                    if(isset($_GET["id_Usuario"]) && isset($_GET["Editar"])){
                         $id_Us = $_GET["id_Usuario"];
                         $consulta = $conexion->readOne("SELECT * FROM cliente WHERE id_Cliente=$id_Us");
                         $row = mysqli_fetch_object($consulta);
                         $NombreEmpresa = $row->Nombre_Empresa;
                         $NombreRepresentante = $row->Nombre_Representante;
                         $Ruc = $row->RUC;
                         $Email = $row->Email;?>
                         <div class='col-md-offset-1 col-md-4 col-sm-12'>
                              <form action='./dll/metodos.php?id=<?php echo $id_Us?>' method='POST' enctype=multipart/form-data>
                              <h3 class='section-title'>Agregar Usuario</h3>

                              <h5>Ingrese el nombre de la empresa</h5>
                             <input type='text' name='NombreEmpresa' class='form-control' placeholder='Ingrese el nombre de la empresa' required='' value="<?php echo $NombreEmpresa?>">                        
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>Ingrese el ruc de la empresa</h5>
                             <input type='text' name='Ruc' class='form-control' placeholder='Ingrese el ruc de la empresa' required='' value = "<?php echo $Ruc?>">
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>El nombre del representante</h5>
                             <input type='text' name='NombreRepresentante' class='form-control' placeholder='Ingrese el nombre del representante' required='' value = "<?php echo $NombreRepresentante?>">
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>Ingrese el correo de la empresa</h5>
                             <input type='text' id='correo' name='correo' class='form-control' placeholder='Ingrese el correo de la empresa' required='' value = "<?php echo $Email?>">
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>Seleccione la provincia</h5>
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
                            <h5>Seleccione el cantón</h5>
                              <select id = "Canton" type ="select" name="Canton" class="form-control">
                              </select>
                              <button class='submit-btn form-control' style= background-color:#9dc15b id='form-submit' name='ActualizarUsuario'>Actualizar</button>
                              <!--<input type='submit' class='submit-btn form-control' style= background-color:#9dc15b value='Agregar' name='Agregar'>-->
                              </form>
                         </div>
                     <?php }else{?>
                         <div class='col-md-offset-1 col-md-4 col-sm-12'>
                         <form action='./dll/metodos.php' method='POST' enctype=multipart/form-data>
                             <h3 class='section-title'>Agregar Usuario</h3>
                             
                             <h5>Ingrese el nombre de la empresa</h5>
                             <input type='text' name='NombreEmpresa' class='form-control' placeholder='Ingrese el nombre de la empresa' required=''>                        
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>Ingrese el ruc de la empresa</h5>
                             <input type='text' name='Ruc' class='form-control' placeholder='Ingrese el ruc de la empresa' required=''>
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <div class='div-table-cell' style='width: 4%;'></div>   
                             <h5>El nombre del representante</h5>
                             <input type='text' name='NombreRepresentante' class='form-control' placeholder='Ingrese el nombre del representante' required=''>
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>Ingrese el correo de la empresa</h5>
                             <input type='text' id='correo' name='correo' class='form-control' placeholder='Ingrese el correo de la empresa' required=''>
                             <div class='div-table-cell' style='width: 4%;'></div>
                             <h5>Seleccione la provincia</h5>
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
                            <h5>Seleccione el cantón</h5>
                              <select id = "Canton" type ="select" name="Canton" class="form-control">
                              </select>
                             <button class='submit-btn form-control' style= background-color:#9dc15b id='form-submit' name='AgregarUsuario'>Agregar</button>
                             <!--<input type='submit' class='submit-btn form-control' style= background-color:#9dc15b value='Agregar' name='Agregar'>-->
                         </form>
                     </div>
                     <?php }?>
               
             </div>
            <div class="row">
                <h2 class="section-title">Tabla de Usuarios</h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark" style=" margin:0 !important; background-color:#9dc15b; font-weight:bold;">
                            <tr style="margin:0 !important; font-weight:bold;">
                                <th class="col" style="width: 3%;">ID</th>
                                <th class="col" style="width: 20%;">Nombre Empresa</th>
                                <th class="col" style="width: 15%;">Nombre Representante</th>
                                <th class="col" style="width: 15%;">Ruc</th>
                                <th class="col" style="width: 15%;">Correo</th>
                                <th class="col" style="width: 16%;">Cantón</th>
                                <th class="col" style="width: 10%;">Editar</th>
                                <th class="col" style="width: 10%;">Eliminar</th>
                                
                            </tr>
                        </thead>
                        <tbody >
                            <?php 
                         
                                $Infografia = $conexion->readConsulta("SELECT * FROM cliente");
                                while($row=mysqli_fetch_object($Infografia)){                                  
                                    $id=$row->id_Cliente;                                                   
                                    $NombreEmpresa = $row->Nombre_Empresa;
                                    $NombreRepresentante = $row->Nombre_Representante;
                                    $Ruc = $row->RUC;
                                    $Email = $row->Email;
                                    $IdCanton = $row->IdCanton;
                                    $consulta = $conexion->readOne("SELECT c.*, ca.Canton FROM cliente c, canton ca WHERE c.IdCanton = $IdCanton AND ca.IdCanton = c.IdCanton;");
                                    $row1 = mysqli_fetch_object($consulta);
                                    $Canton = $row1->Canton;?>
                                    <tr class="table" style="margin:0 !important; font-weight:bold;">
                                        <td class="col" style="width: 3%;"><?php echo $id?></td>
                                        <td class="col" style="width: 15%;"><?php echo $NombreEmpresa?></td>
                                        <td class="col" style="width: 15%;"><?php echo $NombreRepresentante?></td>
                                        <td class="col" style="width: 10%;"><?php echo $Ruc?></td> 
                                        <td class="col" style="width: 15%;"><?php echo $Email?></td>
                                        <td class="col" style="width: 10%;"><?php echo $Canton?></td>
                                        <td class="col" style="width: 7%;"><a class="btn btn-success" href="AdministrarUsuarios.php?id_Usuario=<?php echo $id?>&Editar"><img class="icono_pen" src="./images/pen.png" alt=""width="25%"></a></td>
                                        <td class="col" style="width: 8%;"><a class="btn btn-danger" href="#" onclick="preguntar(<?php echo $id?>)"><img class = "icono_delete" src="./images/delete.png" alt=""width="25%"></a></td>
                                       
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
                window.location.href = "dll/metodos.php?id_Usuario="+id+"&EliminarUsuario";
            }
        }
        ;  
     </script> 

</body>
</html>