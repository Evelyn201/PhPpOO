<?php 

	class miclase{
		public $mensaje =1;

		public static function hola(){
			return "hola";

		}
		public static function metodo(){
			return self::hola();
		}
	}

	echo miclase::metodo();

 ?>