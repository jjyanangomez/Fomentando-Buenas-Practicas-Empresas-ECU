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
?>