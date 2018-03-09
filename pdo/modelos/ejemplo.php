<?php 
session_star();
if( !isset($_SESSION['usuario']) ){
	$_SESSION['usuario'] = "Guillermo";
	echo $_SESSION['usuario'];	
}else{
	echo "Ya iniciaste sesion";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<input type="submit" name='cerrar_sesion'/>
	</form>


</body>
</html>