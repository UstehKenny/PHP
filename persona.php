<?php
class Persona{ //Objeto
	//Atributos
	public $nombre = "";
	public $apellidos = "";
	public $edad = 0;
	public $vida = true;
	//Métodos
	function isVivo(){	return $vida; }
	
	function getNombre(){
		return $this->nombre; 
	}
	function getEdad(){ return $this->edad; }
	function getApellidos(){ return $this->apellidos; }
	function getVida(){ return $this->vida; }
	
	function setNombre($nombre){$this->nombre = $nombre;}
}
$pedro = new Persona();
echo "Hola, mi nombre es ".$pedro->nombre;
$pedro->nombre = "Pedro";
$pedro->edad = 25;
$pedro->apellidos = "Gómez Pérez";
$pedro->vida = false;
echo "Hola, mi nombre es ".$pedro->getNombre();
echo "Hola, mi nombre es ".$pedro->getEdad();
echo "Hola, mi nombre es ".$pedro->getApellidos();
echo "Hola, mi nombre es ".$pedro->getVida();
?>

<?php
class Persona{
	<?php
class Persona{
	//Atributos
	public $nombre = "";
	public $apellidos = "";
	public $edad = 0;
	public $vida = true;
	public $peso = 0;
	//Métodos
	function isVivo(){	return $vida; }
	
	function getNombre(){
		return $this->nombre; 
	}
	function getEdad(){ return $this->edad; }
	function getApellidos(){ return $this->apellidos; }
	function getVida(){ return $this->vida; }
	
	function setNombre($nombre){ $this->nombre = $nombre; }
	function setEdad($edad){ $this->edad = $edad; }
	function setVida($vida){ $this->vida = vida; }
	/*
	function __construct(){
		echo "Bienvenido al mundo";
	}
	*/
	function __construct($nombre){
		$this->nombre = $nombre;
	}
	function __destruct(){
		echo "Se manda a llamar al final";
	}
}
$pedro = new Persona("Pedro");
echo "Hola, mi nombre es ".$pedro->nombre;
//$pedro->nombre = "Pedro";
$pedro->edad = 25;
$pedro->apellidos = "Gómez Pérez";
$pedro->vida = false;
/*
echo "Hola, mi nombre es ".$pedro->getNombre();
echo "Hola, mi nombre es ".$pedro->getEdad();
echo "Hola, mi nombre es ".$pedro->getApellidos();
echo "Hola, mi nombre es ".$pedro->getVida();
*/
$pedro->setNombre("Orlandos");
echo $pedro->getNombre();
?>

  //Atributos
	public $nombre = "";
	public $apellidos = "";
	public $edad = 0;
	public $vida = true;
	//Métodos
	function isVivo(){	return $vida; }
	
	function getNombre(){
		return $this->nombre; 
	}
	function getEdad(){ return $this->edad; }
	function getApellidos(){ return $this->apellidos; }
	function getVida(){ return $this->vida; }
	
	function setNombre(){
		
	}
}
$pedro = new Persona();
echo "Hola, mi nombre es ".$pedro->nombre;
$pedro->nombre = "Pedro";
$pedro->edad = 25;
$pedro->apellidos = "Gómez Pérez";
$pedro->vida = false;
echo "Hola, mi nombre es ".$pedro->getNombre();
echo "Hola, mi nombre es ".$pedro->getEdad();
echo "Hola, mi nombre es ".$pedro->getApellidos();
echo "Hola, mi nombre es ".$pedro->getVida();
?>

