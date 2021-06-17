<?php
    include("database.php");
    $conexion = new Database();
	$conexion2 = new Database();
	$conexion3 = new Database();

    if(isset($_POST["Agregar"])){
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
	if(isset($_GET["id_Video"]) && isset($_GET["Eliminar"])){
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
	if(isset($_POST["Actualizar"])){
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
		$Archivo = $_POST["Archivo"];
		$Fecha = $_POST["Fecha"];
		$envio1 = "INSERT INTO `recursos_digitales`(`Nombre`, `Tipo`, `Archivo`, `Fecha_Creacion`) VALUES ('$Nombre','$Tipo','$Archivo','$Fecha')";
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
if(isset($_POST["Agregar"])){
	$Titulo = $_POST["Titulo"];
	$Categoria = $_POST["Categoria"];
	$Extencion = $_POST["Extencion"];
	$Fecha = $_POST["Fecha"];
	$envio2 = "INSERT INTO `recursos_infografia`(`Titulo`, `Categoria`, `Extencion`, `Fecha_publicacion`) VALUES ('$Titulo','$Categoria','$Extencion','$Fecha')";
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