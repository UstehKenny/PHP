<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//Para incluir código de la clase: include..
	//Sirve como copy-paste

	include("clase_estudiante.php");//Sirve para agregar codigo que puede llegar a ser opcional o al menos no algo vital para la funcionalidad del programa
	//Require, va incluir codigo que es vital para el procesamiento del programa

	//require_once
	//include_once


	$materias = array("Biologia", "Geografía", "Historia", "Educación física", "Física", "Química");
	
	$pedro = new Estudiante("Pedro");
	$juan = new Estudiante("Juan");
	$maria = new Estudiante("Maria");
	$luz = new Estudiante("Luz");
	
	$pedro->setMaterias(
		array(
			array($materias[0], rand(1, 10)),  
			array($materias[1],  rand(1, 10)),  
			array($materias[2],  rand(1, 10)) 
		)
	);
	$juan->setMaterias( 
		array(
			array($materias[3], rand(1, 10)),  
			array($materias[4],  rand(1, 10)),  
			array($materias[0],  rand(1, 10)) 
		)
	);
	$maria->setMaterias( 
		array(
			array($materias[1], rand(1, 10)),  
			array($materias[2],  rand(1, 10)),  
			array($materias[3],  rand(1, 10)) 
		)
	);
	$luz->setMaterias( 
		array(
			array($materias[4], rand(1, 10)),  
			array($materias[0],  rand(1, 10)),  
			array($materias[1],  rand(1, 10)) 
		)
	);
	$mats = $juan->getMaterias();
	$estudiantes = array( $pedro, $maria, $juan, $luz);
	foreach($estudiantes as $estudiante){
		echo "<table border='1'>";
		echo "<tr><th colspan='2'>".$estudiante->getNombre()."</th></tr>";
		foreach($estudiante->getMaterias() as $materia){
			$nombre_materia = utf8_decode($materia[0]);
			$calificacion_materia = $materia[1];			
			echo "<tr><td>$nombre_materia</td><td>$calificacion_materia</td></tr>";
		}
		echo "</table>";
	}
	?>
	?>
	
</body>
</html>