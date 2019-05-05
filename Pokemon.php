<!DOCTYPE html>
<html lang="es">
<head>
    <title>A - Wikeevee</title>
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
</head>
<body>
<?php require_once("recursos/encabezado.php");



//capturamos el id de la imagen que pasamos por parametro
$cod=$_GET["parametro"];
$conect = mysqli_connect("localhost","root","1234","pokemons");//

	$busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE id =$cod");

	while($f=mysqli_fetch_array($busqueda))
	{

?>
<div class="container containerP">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4"><?php echo $f["nombre"];?></h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="img/<?php echo $f["nombre"];?>1.jpg" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Descripción</h3>
            <p><?php echo $f["descripcion"];?></p>
            <h3 class="my-3">Datos</h3>
            <ul>
                <li>Especie: <?php echo $f["especie"];?></li>
                <li>Tipo: <?php echo $f["tipo"];?></li>
                <li>Generación: <?php echo $f["generacion"];?></li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Otras imágenes</h3>

    <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="img/<?php echo $f["nombre"];?>2.jpg" alt="">
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="img/<?php echo $f["nombre"];?>3.jpg" alt="">
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="img/<?php echo $f["nombre"];?>4.jpg" alt="">
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="img/<?php echo $f["nombre"];?>5.jpg" alt="">
        </div>

    </div>
    <!-- /.row -->

</div>
  <?php
  }//fin del while
  require_once("recursos/footer.php");
  ?>
</body>
</html>