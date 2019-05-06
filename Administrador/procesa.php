<?php
session_start();

$usuario = $_SESSION['username'];

if(!isset($usuario))
{
	header("location: ../login.php");
}
?>
<?php

$id='';
$nombre='';
$tipo='';
$foto='';
$desc='';
$especie='';
$generacion='';
$descripcion='';



if(isset($_POST['guardar'])){
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$desc=$_POST['desc'];
$especie=$_POST['especie'];
$descripcion=$_POST['desc'];
$generacion=$_POST['generacion'];

/*
Hay que validar que el nombre del poke no se repita

$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");//
$busqueda=mysqli_query($conect, "SELECT * FROM personajes");
$f=mysqli_fetch_array($busqueda);
if($f['nombre']==$nombre;)
	{
		
		echo "<script language='JavaScript'>alert('Ya existe este Pokemon!');</script>"; 
	}else{
*/	


//elimino la imagen existente en la carpeta img
//unlink('../img/'.$nombre.'.jpg');

//sube la nueva imagen a la carpeta img
if($_FILES["imagen"]["error"] > 0)
{
echo "Error: " . $_FILES["imagen"]["error"] . " No se ha subido ningun archivo<br />";
}
else 
{ 
	$lugar="../img/";
	$_FILES["imagen"]["name"]=$nombre.".jpg";
	$nombre2=$_FILES["imagen"]["name"];
	

	if(@move_uploaded_file($_FILES["imagen"]["tmp_name"],$lugar . $nombre2)){
	
			
			echo "<script language='JavaScript'>alert('Se guardo con exito!');</script>"; 			
	 


$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");//
$sql=mysqli_query($conect, "UPDATE personajes
								 SET nombre = '$nombre', tipo= '$tipo', descripcion='$descripcion',
								 especie='$especie', generacion='$generacion'
								 WHERE id = '$id';");
								 
echo "<script>location.href='IndexAdmin.php'</script>";
	
	}else{
		echo "no se pudo subir el archivo";	
	
}
}	

	}

		$variable='';
		 if (isset($_POST['btnLog'])) {
         // Echo "Se ha pulsado el boton enviar <br>";
		$variable=$_POST['btnLog'];
									} 
		 switch($variable)
				{
					case 'Nuevo': //echo "<script>location.href='nuevo.php'</script>";
		
						include_once 'nuevoPoke.php';
						break;
				
				
					case 'Cancelar': echo "<script>location.href='IndexAdmin.php'</script>";
						break;
				}
			
?>