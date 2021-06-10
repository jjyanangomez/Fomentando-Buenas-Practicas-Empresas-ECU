<?php
	$usuario = $_POST['user'];
	$password = $_POST['pass'];

	if ($usuario== "admin" && $password =='1234') {
		echo "BIENVENIDO al sistema de SUSTAINABLE COMPANY";
	} else {
		echo "No te encuentras registrado en el sistema";
	}
 ?> 