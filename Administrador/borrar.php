<?php
session_start();

$usuario = $_SESSION['username'];

if(!isset($usuario))
{
	header("location: ../login.php");
}
?>
<?php
//recibo el id de la imagen a borrar
$cod=$_GET["parametro"]; 
$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");// 

$busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE id = $cod");

//Con la funcion unlink borramos la imagen en la carpeta img
while($f=mysqli_fetch_array($busqueda))
	{
		$ruta=$f['nombre'].'.jpg';
		unlink('../img/'.$ruta);
		echo "<script language='JavaScript'>alert('Se elimino correctamente');</script>";
	}

$resultado=mysqli_query($conect, "DELETE FROM personajes WHERE id = $cod");
echo "<script>location.href='IndexAdmin.php'</script>";


?>

