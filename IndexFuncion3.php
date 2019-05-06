
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
          minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <script src="js/jquery_3.2.1_jquery.js"></script>
    <title>Inicio - Wikeevee</title>
</head>
<body>




<?php
require_once("recursos/encabezado.php");

//capturamos el id de la imagen que pasamos por parametro
$cod=$_GET["parametro"];
$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");//

	$busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE id =$cod");


	while($f=mysqli_fetch_array($busqueda))
	{
	
?>														

<img class="imagenphp" src="img/<?php echo $f['nombre'].'.jpg';?>" alt="" />
<?php
}//fin del while
require_once("recursos/footer.php");
?>


</body>
</html>

