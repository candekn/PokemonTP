
<!<!doctype html>
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
<nav class="navbar justify-content-between">
    <a class="navbar-brand" href="IndexFuncion.php"></a>
    <form class="form-inline" method="post" action="IndexFuncion2.php">
        <input class="form-control mr-sm-3" name="buscar" type="search" placeholder="Buscar..."
               aria-label="Search" required>
        <button class="btn submit buscar" name="enviar" type="submit" >Buscar</button>
    </form>
</nav>



<?php
//capturamos el id de la imagen que pasamos por parametro
$cod=$_GET["parametro"];
$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");// 

	$busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE id =$cod");

	while($f=mysqli_fetch_array($busqueda))
	{
	
?>
<img src="img/<?php echo $f['nombre'].'.jpg';?>" alt="" class="img-fluid img-thumbnail"  />

<?php
}//fin del while
?>

<footer class="section-footer">
    <div class="container">
        <section class="footer-bottom row">
            <div class="col-sm-6">
                <p>Trabajo práctico número 2: Pokémon. </p>
                <p>Integrantes: Karlen Ivan, Aguayo Diana, Delgado Rosario.</p>
                <p>2019 UNLaM - Programación Web II</p>
            </div>
            <div class="col-sm-6">
                <p class="text-sm-right">
                    Links<br>
                    <a href="Index.html">Inicio</a><br>
                    <a  href="login.html">Ingresar</a><br>
                    <a href="registro.html">Registrarse</a>
                </p>
            </div>
        </section> <!-- //footer-top -->
    </div><!-- //container -->
</footer>
</body>
</html>

