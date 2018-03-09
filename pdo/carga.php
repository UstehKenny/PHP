<?php
/*
function obtenerConexion(){
	$host="localhost";
	$usuario="postgres";
	$pass="123qwe";
	$bd="subastas";
	$puerto="5432";
	$conexion=pg_connect("host=$host port=$puerto user=$usuario password=$pass dbname=$bd")
	or die("No se puede conectar a la base ".pg_last_error());
	return $conexion;
}*/

$query = "SELECT * FROM sucursales";
$result = pg_query($conexion,$query);
$resultados = pg_fetch_all($result);

foreach($resultados as $resultado){
	echo $resultado['id'];

}

class Query{
	private static $_link;
	private static $isInitialized = false;

	function __construct(){}

	static function init(){

		if(isInitialized){
			return;
		}
		$host="";
		$user="";
		$password="";
		$database="";
		try{
			$_link = new PDO(
				"mysql:host=$host;dbname=$database;charset=UTF-8",
				$user,
				$password
			);
			
		}catch(PDOException $pdoe){
			//Imprimir un log de errores
			displayERROR("Error al conectarse"->pdoe->getMessage());
		}
		
	}

	public static function selecciona();

}



 ?>