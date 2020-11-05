<?php 
	class clasePadre{
		public function metodoPadre(){
			return "hola desde el padre";
		}
		public function metodo1(){
			return "este es metodo padre";
		}
 
	}

	class claseHijo extends clasePadre{
		public function metodoHijo(){
			return parent::metodo1();//manda a llamar el mismo metodo de diferente clase 
		//	return self::metodoPadre();//usando metodos dentro de otras clases de los mismos metodos (manda a llamar diferente metodo de diferente claee)
		}
		public function metodo1(){
			return "este es metodo hijo";
		}
	}
//la herencia es obtener todas las propiedades de una clase a ptra
	//mediante la palabra reservada extends
	//*$obj=new claseHijo();
	//*echo $obj->metodoPadre();
//instancia rapida o de docle puntiación
echo claseHijo::metodoPadre();

 ?>