
<?php
$nombre='';
$tipo='';
$foto='';
$desc='';
$especie='';
$generacion='';

if(isset($_POST['guardar'])){
	
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$desc=$_POST['desc'];
$especie=$_POST['especie'];
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
	
	
//sube la imagen a la carpeta img
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
$busqueda=mysqli_query($conect, "INSERT INTO personajes (nombre,tipo,descripcion,especie,generacion) 
								 VALUES ('$nombre', '$tipo', '$desc','$especie', '$generacion')");
	
	}else{
		echo "no se pudo subir el archivo";	
	
}
}	

	}

?>

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ingreso - Wikeevee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <script src="js/jquery_3.2.1_jquery.js"></script>

</head>
<body>
<?php require_once("recursos/encabezadoAdmin.php");?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Nuevo Pokemon</h5>
                    <form class="form-signin" name="form" method="post" action="nuevoPoke.php" enctype="multipart/form-data">
                        <div class="form-label-group">
						
                            <input type="text" id="inputEmail" class="form-control" name="nombre"
                                   placeholder="Nombre..." required autofocus>
                            <label for="inputEmail" class="labels">Nombre</label>
                        </div>
                        <div class="form-label-group">
						
                            <input type="text"  class="form-control" name="tipo"
                                   placeholder="Tipo..." required>
                         <label for="inputPassword" class="labels">Tipo</label>   
                        </div>
						<div class="form-label-group">
						
                            <input type="file" name="imagen"/>
                         <label for="inputPassword" class="labels">Foto</label>  
                        </div>
						<div class="form-label-group">
						<textarea name="desc" placeholder="..." ></textarea>
						<br>
                         <label class="labels">Descripcion</label>  
                        </div>
						
						<div class="form-label-group">
                            <input type="text"  class="form-control" name="especie"
                                   placeholder="Especie..." required>
                         <label  class="labels">Especie</label>   
                        </div>
						
						<div class="form-label-group">
                            <input type="text"  class="form-control" name="generacion"
                                   placeholder="Generacion..." required>
                         <label  class="labels">Generacion</label>   
                        </div>
						
                        <br>
                        <button class="btn btn-lg btn-block submit"
                                type="submit" name="guardar" value=guardar>Guardar</button>
						<button class="btn btn-lg btn-block submit"
                        type="reset" name="cancelar" value=cancelar>Cancelar</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once("recursos/footerAdmin.php") ?>
</body>

</html>
