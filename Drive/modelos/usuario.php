<?php

class Usuario{
	public $usuario;
	public $contrasenia;

	function __construct($usuario,$contrasenia){
		$this->usuario = $usuario;
		$this->contrasenia = $contrasenia;
	}

	function getUsuario(){return $this->usuario;}
	function getContrasenia(){return $this->contrasenia;}
}


 ?>