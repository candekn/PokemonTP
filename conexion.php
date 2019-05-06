<?php  
	
class Conexion{	
		//1 CONECTAR CON LA BD
	//$host = "localhost";
	private $host = "localhost";
	//$host = "localhost:3306";
	private $usuario = "root";
	//$clave = "Cuc41515"; 
	//$clave = 11021998;
	//$clave=1234;
	private $clave=11021998;
	private $bd = "pokemons";
	 
	 private $msq="";
	public function __construct()
	 {
		 
		$this->msq = new mysqli($this->host, $this->usuario, $this->clave, $this->bd); 
	
	 }
	 
	 
	
	 public function loguearUsuario($consulta){
 if(!$resultado = $this->msq->query($consulta) )
 {
	 echo "Ha ocurrido un error";
 }else{
	 
	 return $resultado; //muestra las filas afectadas

	   }
 }
	 
	 
	 

	
}
?>	