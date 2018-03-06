<?php
	class Estudiante{
		public $nombre = "";
		public $materias = array();
		
		function __construct($nombre){
			$this->setNombre($nombre);
		}
		function setNombre($nombre){$this->nombre=$nombre;}
		function setMaterias($materias){$this->materias=$materias;}
		
		function getNombre(){return $this->nombre;}
		function getMaterias(){return $this->materias;}
	} ?>