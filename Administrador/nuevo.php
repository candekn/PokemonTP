
<?php
$nombre='';
$tipo='';
$foto='';
$desc='';


if(isset($_POST['guardar'])){
	
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$desc=$_POST['desc'];
	
//sube la imagen a la carpeta img

if($_FILES["imagen"]["error"] > 0)
{
echo "Error: " . $_FILES["imagen"]["error"] . " No se ha subido ningun archivo<br />";
}
else 
{ 
	$lugar="img/";
	$_FILES["imagen"]["name"]=$nombre.".jpg";
	$nombre2=$_FILES["imagen"]["name"];

	if(@move_uploaded_file($_FILES["imagen"]["tmp_name"],$lugar . $nombre2)){
	
			echo "se subio el archivo". "<br />";	
				//$ruta=$lugar.$nombre.".jpg";
				$ruta=["imagen"]["tmp_name"];
/*	
   Caracteristicas de la imagen subida
*/
echo "Upload: " . $_FILES["imagen"]["name"] . "<br />";
echo "NOOOBREEE: " . $nombre2 . "<br />";
echo "Type: " . $_FILES["imagen"]["type"] . "<br />";
echo "Size: " . ($_FILES["imagen"]["size"] / 1024) . "<br />";
echo "Stored in: " . $_FILES["imagen"]["tmp_name"]. "<br />";
//echo "extencion:" . $extension=substr($tipo,strpos($tipo,'/')+1);
echo "ruta:" . $ruta. "<br />"; 

	
	}else{
		echo "no se pudo subir el archivo";	
	
}
}	

$foto=$_FILES["imagen"]["name"];



require_once("conexionBD/conexion.php");
$conexion1 = new Conexion();
$consulta = "INSERT INTO personajes (Nombre, Tipo, Descripcion) VALUES ('$nombre', '$tipo', '$desc')";						
$conexion1->consultarBD($consulta);

echo "imageeeen:".$foto;


	}

?>



<!DOCTYPE html>
<html lang="es">
<head>
<title> Servicios </title>
<meta charset="utf-8">
</head>
<body>
<form  id="formulario" name="form" method="post" action="nuevo.php" enctype="multipart/form-data">
	
            <H1> Nuevo personaje </h1>
			
			<h2> Completá los siguientes datos: </h2>
			
			
			<label for="nombre" class="last-name">Nombre</label>
			<br>
            <input type="text" placeholder=" Ingresa Nombre" name="nombre">
			<br>
			
			<!--validar apellido-->
			
			<label for="tipo" class="last-name">Tipo</label>
			<br>
            <input type="text" placeholder=" Ingresa tipo" name="tipo">
			<br>
			
			
			
			<label for="foto">Foto</label>
			<br>
            <input type="file" name="imagen" >
			
			<!--<input type="submit" value="Subir" name="subir">-->
			
			<br>
			<label> Descripcion </label>
			<br>
			<textarea name="desc" placeholder="..." ></textarea>
			
			<br>
			<input type="submit" value="Guardar" name="guardar">
			<br>
			<img src="..\eliminar-registro\img\15940444_1318220971550973_7681097437073195512_n.jpg">
			
			
	</body>	
	
</form>
</html>

