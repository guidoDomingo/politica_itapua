<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("pgsql:host=localhost;dbname=unclzepr_sanber_politica",
			            "unclzepr_postgres",
			            "guidoruiz123");

		$link->exec("set names utf8");

		return $link;

	}
	
}