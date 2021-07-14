<?php
    include("database.php");
    $conexion = new Database();
	$conexion2 = new Database();
	$conexion3 = new Database();

	/* Videos */
    if(isset($_POST["AgregarVideo"])){
		$titulo = $_POST["titulo"];
		$url = $_POST["Url"];
		$Descripcion = $_POST["Descripcion"];
		$Fecha = $_POST["Fecha"];
		$envio = "INSERT INTO `recursos_audiovisuales`(`Nombre`, `URL`, `Descripcion`, `Fecha_Creacion`) VALUES ('$titulo','$url','$Descripcion','$Fecha')";
		$resultado = $conexion->InsertConsulta($envio);
		if(!$resultado){
			die("Query Failed");
		}else{
			echo "Completado";
		}
		header("Location: ../AdminitrarVideos.php");
	}
	if(isset($_GET["id_Video"]) && isset($_GET["EliminarVideo"])){
		$id= $_GET["id_Video"];
		$envio = "DELETE FROM `recursos_audiovisuales` WHERE IDrecurso_Audio= $id";
		$resultado = $conexion->deleteConsulta($envio);;
		if(!$resultado){
			die("Query Failed");
		}else{
			echo "Completado";
		}
		header("Location: ../AdminitrarVideos.php");
	}
	if(isset($_POST["ActualizarVideo"])){
		$id = $_GET["id"];
		$titulo = $_POST["titulo"];
		$url = $_POST["Url"];
		$Descripcion = $_POST["Descripcion"];
		$Fecha = $_POST["Fecha"];
		$envio = "UPDATE `recursos_audiovisuales` SET `Nombre`='$titulo',`URL`='$url',`Descripcion`='$Descripcion',`Fecha_Creacion`='$Fecha' WHERE IDrecurso_Audio=$id";
		$resultado = $conexion->updateConsulta($envio);
		if(!$resultado){
			echo $envio;
			die("Query Failed");
			
		}else{
			echo "Completado";
		}
		header("Location: ../AdminitrarVideos.php");
	}

	

	/*Recursos*/
	if(isset($_POST["AgregarRecurso"])){
		$Nombre = $_POST["Nombre"];
		$Tipo = $_POST["Tipo"];
		$nombreArchivo = $_FILES['archivo']['name'];
		$new_name_archivo = null;

		$archivo1 = $_FILES['archivo']['tmp_name']; 
        $dir1 = 'files/';
    	if (!file_exists($dir1)) {
		mkdir($dir1, 0777, true);
     	}
	    $new_name_archivo = $dir1 . $nombreArchivo;

	    move_uploaded_file($archivo1,"../". $new_name_archivo);

		$Fecha = $_POST["Fecha"];

		$envio1 = "INSERT INTO `recursos_digitales`(`Nombre`, `Tipo`, `Archivo`, `Fecha_Creacion`) VALUES ('$Nombre','$Tipo','$new_name_archivo','$Fecha')";
		$resultado1 = $conexion2->InsertConsulta($envio1);
		if(!$resultado1){

			die("Query Failed");
		}else{
			echo "Completado";
		}
		header("Location: ../AdminitrarRecurso.php");
	}

	if(isset($_GET["id_Recurso"]) && isset($_GET["Editar"])){
		$ID= $_GET["id_Recurso"];
		
		echo "Editar recurso";
	}
	if(isset($_GET["id_Recurso"])  && isset($_GET["Eliminar"])){
		$ID= $_GET["id_Recurso"];

        $urlArchivo = $_GET["Archivo"];

		

		$envio1 = "DELETE FROM `recursos_digitales` WHERE IdRecurso_Digital= $ID";
		$resultado1 = $conexion2->deleteConsulta($envio1);;
		if(!$resultado1){
			die("Query Failed");
		}else{
			echo "Completado";
		}

		if(file_exists("../$urlArchivo")){
			
			if(unlink("../$urlArchivo")){
                echo "archivo eliminado";
			}else{
				echo "archivo no se pudo eliminar";
			}
		}else{
			echo "No encontro el archivo";
		}

		header("Location: ../AdminitrarRecurso.php");
	}
/*Infografias*/
if(isset($_POST["AgregarInfografia"] )){
	$Titulo = $_POST["Titulo"];
	$Categoria = $_POST["Categoria"];
	$Extencion = $_POST["Extencion"];
	
	$file_name = $_FILES['files']['name']; 
	$new_name_file = null;

	//$file_name = $_POST['files'];
	//$nombre = $_FILES['files']['name']; 
    $archivo = $_FILES['files']['tmp_name']; 
    $dir = 'files/';
	if (!file_exists($dir)) {
		mkdir($dir, 0777, true);
	}
	$new_name_file = $dir . $file_name;

	move_uploaded_file($archivo,"../". $new_name_file);
	
	$Fecha = $_POST["Fecha"];

	$envio2 = "INSERT INTO `recursos_infografia`(`Titulo`, `Categoria`, `Extencion`,`url`, `Fecha_publicacion`) VALUES ('$Titulo','$Categoria','$Extencion','$new_name_file','$Fecha')";
	$resultado2 = $conexion3->InsertConsulta($envio2);
	if(!$resultado2){

		die("Query Failed");
	}else{
		echo "Completado";
	}
	header("Location: ../AdminitrarInfografias.php");
}

if(isset($_GET["id_Infografia"]) && isset($_GET["Editar"])){
	$iD= $_GET["id_Infografia"];
	
	echo "Editar Infografia";
}
if(isset($_GET["id_Infografia"]) && isset($_GET["Eliminar"])){
	$iD= $_GET["id_Infografia"];
	$envio2 = "DELETE FROM `recursos_infografia` WHERE id_recurso_infografia = $iD";
	$resultado2 = $conexion3->deleteConsulta($envio2);
	
	if(!$resultado2){
		die("Query Failed");
	}else{
		echo "Completado";
	}
	header("Location: ../AdminitrarInfografias.php");
}
/*Agregar Encuestado*/
if(isset($_GET["AgregarPersona"])){
	$NombreEmpre = $_POST["nombreEmpresa"];
	$NombreRepre = $_POST["nombreRepresentante"];
	$RUC = $_POST["RUC"];
	$Email = $_POST["email"];
	$Canton = (int)$_POST["Canton"];
	$sql = "INSERT INTO cliente(Nombre_Empresa, Nombre_Representante, RUC, Email, IdCanton) VALUES ('$NombreEmpre','$NombreRepre','$RUC','$Email','$Canton')";
	$resultado = $conexion->InsertConsulta($sql);
	if(!$resultado){
		die("Query Failed");
	}else{
		echo "Completado";
	}
	//echo '<script type="text/javascript">
		//window.open("https://survey123.arcgis.com/share/828a14a2074847899a525923a82b5b5e","_blank");
		//location.href= "../ResultadosEncuesta.php";
		//</script>';
	header("Location: ../ResultadosEncuesta.php");
}

 /*Lectura de json*/
 if(isset($_GET["O_JSON"])){
	$cadena = file_get_contents("https://services9.arcgis.com/2YA05qh4jhRDhuXH/arcgis/rest/services/survey123_828a14a2074847899a525923a82b5b5e/FeatureServer/0/query?outFields=*&where=1%3D1&f=json");
    $json = json_decode($cadena,true);
    $row =$json["features"];
	echo $row;
	
 }
 /*usuarios de encuesta*/

if(isset($_POST["AgregarUsuario"])){
		$NombreEmpresa = $_POST["NombreEmpresa"];
		$NombreRepresentante = $_POST["NombreRepresentante"];
		$Ruc = $_POST["Ruc"];
		$Correo = $_POST["correo"];
		$CantonUsu = (int)$_POST["Canton"];
		$envio = "INSERT INTO `cliente`(Nombre_Empresa, Nombre_Representante, RUC, Email, IdCanton) VALUES ('$NombreEmpresa','$NombreRepresentante','$Ruc','$Correo','$CantonUsu')";
		$resultado = $conexion->InsertConsulta($envio);
		if(!$resultado){
			die("Query Failed");
		}else{
			echo "Completado";
		}
		header("Location: ../AdministrarUsuarios.php");
	}
	if(isset($_GET["id_Usuario"]) && isset($_GET["EliminarUsuario"])){
		$id= $_GET["id_Usuario"];
		$envio = "DELETE FROM `cliente` WHERE id_Cliente= $id";
		$resultado = $conexion->deleteConsulta($envio);;
		if(!$resultado){
			die("Query Failed");
		}else{
			echo "Completado";
		}
		header("Location: ../AdministrarUsuarios.php");
	}
	if(isset($_POST["ActualizarUsuario"])){
		$id = $_GET["id"];
		$NombreEmpresa = $_POST["NombreEmpresa"];
		$NombreRepresentante = $_POST["NombreRepresentante"];
		$Ruc = $_POST["Ruc"];
		$Correo = $_POST["correo"];
		$CantonUsu = (int)$_POST["Canton"];
		$envio = "UPDATE `cliente` SET `Nombre_Empresa`='$NombreEmpresa',`Nombre_Representante`='$NombreRepresentante',`RUC`='$Ruc',`Email`='$Correo',`IdCanton`='$CantonUsu' WHERE id_Cliente = $id";
		$resultado = $conexion->updateConsulta($envio);
		if(!$resultado){
			echo $envio;
			die("Query Failed");
			
		}else{
			echo "Completado";
		}
		header("Location: ../AdministrarUsuarios.php");
	}
?>