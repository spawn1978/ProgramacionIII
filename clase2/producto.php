<?php 


class producto
{
	private $_id;
	private $_nombre;
	private $_importador;
	private $_paisOrigen;
	private $_kilos;


	public function __construct() 
	{ // código 
		$this->_id=2;
		$this->_nombre="flauta";
		$this->_importador="pepe";
		$this->_paisOrigen="arg";
		$this->_kilos="100";		
	}

	public function mostrar()
	{
		
		echo "<br> ID: $this->_id <br> NOMBRE: $this->_nombre <br> IMPORTADOR: $this->_importador <br> PAIS DE ORIGEN: $this->_paisOrigen <br> KILOS: $this->_kilos <br>";
	}

}



?>
