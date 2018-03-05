<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
      //https://codeshare.io/5Zqe4V
      echo 'Hola mundo';
      echo "<p>5+2=",(5+2)."</p>";
      echo rand(1,10);


      //variables
      $edad = 6;
      echo $edad;

      $entero = 0;
      $flotante = 3.2;
      $booleano = true;
      $cadena = "Hola Mundo";
     	echo "</br>";
      $arreglo = array();
      //var_dump muestra el tipo de dato
      var_dump($entero);
      echo "</br>";
      var_dump($flotante);
      echo "</br>";
      var_dump($booleano);
      echo "</br>";
      var_dump($cadena);
      echo "</br>";
      var_dump($arreglo);
      echo "</br>";
      var_dump($no_existe);
      echo "</br>";

     // echo $no_existe2;

      $arreglo[0] = "Primer elemento";
      $arreglo[1] = "Segundo elemento";
      $arreglo[2] = "Tercer elemento";
     // var_dump($arreglo);

      //
      $matriz = array();
      $matriz[0][0] = 1;
      $matriz[0][1] = 2;
      $matriz[0][3] = 3;
      $matriz[1][0] = 4;
      $matriz[1][1] = 5;
      $matriz[1][2] = 6;

      //Arreglos asociativos
      $arreglo_asociativo = array();
      $arreglo_asociativo['jorge'] = "Juega americano";
      $arreglo_asociativo['carolina'] = "Juega pin pon";
      $arreglo_asociativo['roberto'] = "Juega soccer";
      $arreglo_asociativos['miguel'] = "Juega tennis";
	  $arreglo_asociativos['uriel'] = "Juega quemados";

      echo $arreglo_asociativo['roberto'];

 ?>
<table border="1">
	<tr>
		<td><?php echo $matriz[0][0];?></td>
		<td><?= $matriz[0][1];?></td>
		<td><?= $matriz[0][3];?></td>
	</tr>
		<tr>
			<td><?php echo $matriz[2][0]; ?></td>
			<td><?= $matriz[2][1]; ?></td>
			<td><?= $matriz[2][2]; ?></td>
		</tr>
</table>
<?php 
$reprobados = true;
//If-Else
if($reprobados){
		echo "Lo siento Bety no hay becarios;";
	}else{
		echo "Hay algunos becarios";
	}
	//Cantidad sabidad de antemano de cuántas iteraciones vamos a hacer
	for($i=0;$i<10;$i++){
		echo "<p>".$i."</p>";
	}
	/*
	$acceso = false;
	do{
		if(accede_a_la_base){
			$acceso = true;
		}
	}while($acceso==false);
	*/
	/*
	while($max_usuarios_conectados<100){
		//permite_conexion();
	}
	*/
	function suma($op1, $op2){
		echo "Esta función realiza una función...";
		$op1++;
		return ($op1+$op2);
		echo "zaz";//Ya no lo procesa.
	}
	echo "Suma es ".suma(5, 2);

	foreach ($arreglo_asociativo as $clave => $elemento) {
		echo "<p>".$clave." ".$elemento."</p>";
	}

	foreach ($matriz as $elemento) {
		foreach ($elemento as $subelemento) {
			echo $subelemento;
		}
		
	}

	//constantes
	
	
	?>
	

?>



</body>
</html>
 
 


