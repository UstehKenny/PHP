<?php
session_start();
echo $_SESSION['usuario'];
echo "</br>";

echo "Hola mundo";
//echo $usuario->getUsuario();
//echo "<a href"

 ?>

 <!DOCTYPE html>
 <html>
 	<body>
 		<form action="cerrar_sesion.php" method="POST">
 			<input type="submit" value="Cerrar sesion" />
 		</form>
 	</body>

 </html>
