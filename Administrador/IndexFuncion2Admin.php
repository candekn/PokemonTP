
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
          minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <script src="js/jquery_3.2.1_jquery.js"></script>
    <title>Inicio - Wikeevee</title>
	
	<!--Recibe por parametro el id de la imagen seleccionada-->
	<script>
	
	function mostrar(cod){
	<!--Envio el id a una nueva pagina(Pokemon)-->
	<!-- para enviar por get usamos el signo ? parametro = al cod que estamos recibiendo-->

	window.location="PokemonAdmin.php?parametro="+cod;
	//window.location="procesa.php?parametro="+cod;
	}
	</script>
	
	
</head>
<body>

<?php
require_once("recursos/encabezadoAdmin.php");

if(isset($_POST['enviar'])){


$busca = $_POST['buscar'];	

$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");//

	$busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE nombre LIKE '%".$busca."%'");
	
	if(mysqli_num_rows($busqueda)<=0)
	{?>
	
	<h3 style="text-align:center; color:black; padding-top:20px">No se han encontrado resultados para tu busqueda</h3>
	<img class="imagenphpp" src="../img/pokemontriste.jpg">
	
<?php
	}
	
	while($f=mysqli_fetch_array($busqueda))
	{
?>

<!--Agrego funcion onclick para capturar el is de la imagen al hacer click -->
<!--Muestro las imagenes fuera del php para que me tome el onclick-->
<!---Agrego cursor tipo pointer al pasar el mouse por la imagen-->
<img class="imagenphp" src="../img/<?php echo $f['nombre'].'.jpg';?>" style="cursor:pointer" alt=""  
onclick="mostrar(<?php echo $f["id"];?>)" />

<?php
}	}

//require_once("recursos/footerAdmin.php");
?>


</body>
<?php


require_once("recursos/footerAdmin.php");
?>
</html>

