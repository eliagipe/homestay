<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$db = new mysqli('localhost:3308', 'root', '', 'homestay2.0') or die ("No se ha podido conectar al servidor de Base de datos");

	//Conexion Èlia
	//$db = new mysqli('localhost', 'root', 'root', 'homestay') or die ("No se ha podido conectar al servidor de Base de datos");
	
	//Nata
	$db = new mysqli('localhost:3306', 'root', '', 'homestay2.0') or die ("No se ha podido conectar al servidor de Base de datos");
	
?>