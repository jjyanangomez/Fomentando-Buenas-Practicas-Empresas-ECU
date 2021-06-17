<?php
    include("database.php");
    $conexion = new Database();

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
?>