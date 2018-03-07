<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	

	<form method='GET'> <!--Se requiere esta etiqueta para el formulario -->

		<input type='text' name='variable'/>
		<input type='submit' name='enviado' value='Enviar informacion'/>

	</form>
	<form method='POST'> <!--Se requiere esta etiqueta para el formulario -->

		<input type='text' name='variable'/>
		<input type='submit' name='enviado' value='Enviar informacion'/>

	</form>

	


</body>
</html>

<?php 

var_dump($_GET);
echo "</br>";
echo $_GET['variable'];
echo "</br>";
echo $_GET['enviado'];

var_dump($_POST);
echo "</br>";
echo $_POST['variable'];
echo "</br>";
echo $_POST['enviado'];

?>
