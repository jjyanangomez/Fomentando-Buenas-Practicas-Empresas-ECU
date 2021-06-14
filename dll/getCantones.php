<?php
	include("database.php");
	$id_Provincia = $_POST['id_Provincia'];
	$conexion = new Database();
	$cantones =$conexion->readConsulta("SELECT * FROM canton WHERE IDProvincia = '$id_Provincia'");
	echo "<option value='0'>Seleccionar el Canton</option>";
	while($row=mysqli_fetch_object($cantones))
	{
		$id = $row->IdCanton;
        $idProvincia = $row->IDProvincia;
    	$canton = $row->Canton;
		$html= "<option value='".$id."'>".$canton."</option>";
		echo $html;
	}
	
?>