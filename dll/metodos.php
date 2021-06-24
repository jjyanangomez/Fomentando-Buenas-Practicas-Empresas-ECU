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
	if(isset($_POST["Agregar"])){
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
	if(isset($_GET["id_Recurso"]) && isset($_GET["Eliminar"])){
		$ID= $_GET["id_Recurso"];
		$envio1 = "DELETE FROM `recursos_digitales` WHERE IdRecurso_Digital= $ID";
		$resultado1 = $conexion2->deleteConsulta($envio1);;
		if(!$resultado1){
			die("Query Failed");
		}else{
			echo "Completado";
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
	$resultado2 = $conexion3->deleteConsulta($envio2);;
	if(!$resultado2){
		die("Query Failed");
	}else{
		echo "Completado";
	}
	header("Location: ../AdminitrarInfografias.php");
}


?>