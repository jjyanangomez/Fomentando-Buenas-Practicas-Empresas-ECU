<?php

$usuario = $_POST['Usuario'];
$password = md5($_POST['Contrasenia']);
session_start();
$_SESSION['Usuario']=$usuario;

$conexion = mysqli_connect("mysql-juanyasa.alwaysdata.net", "juanyasa", "dragonperla4", "juanyasa_fomentando-b-p-e-e");

$consulta="select*from usuarios where Usuario='$usuario' and Contrasenia='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);



if ($filas) {
	echo "Bienvenid@";
	//echo $password = md5($_POST['Contrasenia']);
	//header("location:Administrador.html");
	
	}else{
		echo '<script>alert("Datos incorrectos")</script>' ;
		echo "<script>location.href='./index-login.html'</script>";
	}

mysqli_free_result($resultado);
mysqli_close($conexion);







 ?> 