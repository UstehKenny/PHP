<?php

function obtenerConexion(){
	$host="localhost";
	$usuario="postgres";
	$pass="123qwe";
	$bd="subastas";
	$puerto="5432";
	$conexion=pg_connect("host=$host port=$puerto user=$usuario password=$pass dbname=$bd")
	or die("No se puede conectar a la base ".pg_last_error());
	return $conexion;




}



 ?>