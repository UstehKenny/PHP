<?php
	session_start();



	DEFINE("DEBUG", true);
	if(DEBUG){
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}
	include('../modelos/usuario.php');
	//var_dump($_POST);
	//var_dump($_GET);
	$username = (isset($_POST['username']))?$_POST['username']:"";
	$password = (isset($_POST['password']))?$_POST['password']:"";

	if($username=="" || $password==""){
		header("location:../vistas/"); //redireccione a una pagina 
	}else{

		$_SESSION['usuario'] = $username;
	// " | " : si no llega a cumplirse una de las condiciones, aun así se pregunta la segunda condicion
	$usuario = new Usuario($username, $password);
	/*
	echo $usuario->getUsuario();
	echo $usuario->getContrasenia();
	
	echo $_POST['username'];
	echo "</br>";
	echo $_POST['password'];
	echo "</br>";
	if( isset($_POST['recordar_contrasenia']) ){	
		echo $_POST['recordar_contrasenia'];
	}else{
		echo "No se va a recordar la contraseña";
	}
	*/
	header("location:../controladores/principal.php");
	echo "</br>";

	}

?>