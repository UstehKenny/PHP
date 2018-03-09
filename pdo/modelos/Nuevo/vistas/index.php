<?php 
session_start();
if( !isset($_SESSION['usuario']) ){
	//$_SESSION['usuario'] = "Guillermo";
	setcookie('cookie_usuario','user2345',time()+365*24*60*60);
	echo "Bienvenido por primera vez".$_COOKIE['cookie_usuario'];
	echo $_SESSION['usuario'];	
}else{
	echo "Ya creaste la cookie";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="../controladores/check.php" method="POST">
		<input type="submit" name='cerrar_sesion' value='Cerrar sesion'/>
	</form>


</body>
</html>