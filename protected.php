<?php 

	//los metodos protegidos solo pueden ser accedidos
	//desde herencia de clases o solo desde clase hijas
	

	class clasePadre{
		protected function metodo1(){
			return "metodo protegido";
		}

	}
	class claseHija extends clasePadre{
		public function muestra(){
			return parent::metodo1();

		}

	}

	$obj= new claseHija();
	echo $obj->muestra();
 ?>