<?php

$cod=$_GET["parametro"];
	$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");
    $busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE id=$cod");

$nombre='';
$tipo='';
$foto='';
$desc='';
$especie='';
$generacion='';


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
	
	
	
			<script>          
					
		function mostrar3(cod3){
	<!--Envio el id a una nueva pagina(Pokemon)-->
	<!-- para enviar por get usamos el signo ? parametro = al cod que estamos recibiendo-->

	window.location="procesa.php?parametro="+cod3;
	//window.location="procesa.php?parametro="+cod;
	}
	</script>
	

</head>
<body>
<?php require_once("recursos/encabezadoAdmin.php");?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Modificar Pokemon</h5>
                    <form class="form-signin" name="form" method="post" action="procesa.php" enctype="multipart/form-data">
          
		
					
					
					<?php
					//Comienzo a rellenar los campos con los datos obtenidos con el select
						while($f=mysqli_fetch_array($busqueda)){
					?>
					
					<div class="form-label-group">
						
						
							<!--Tambien se puede hacer con input tipo hidden para que no se muestre-->
                            <input type="text" id="inputEmail" class="form-control" name="id"
                                   value="<?php echo $f['id'];?>" required autofocus readonly>
                            <label for="inputEmail" class="labels">Id</label>
                        </div>
					
						<div class="form-label-group">
						
                            <input type="text" id="inputEmail" class="form-control" name="nombre"
                                   value="<?php echo $f['nombre'];?>" required autofocus>
                            <label for="inputEmail" class="labels">Nombre</label>
                        </div>
						
					
                        <div class="form-label-group">
						
                            <input type="text"  class="form-control" name="tipo"
                                   value=<?php echo $f['tipo'];?> required>
                         <label for="inputPassword" class="labels">Tipo</label>   
                        </div>
						<div class="form-label-group">
						
                            <input type="file" name="imagen" />
                         <label for="inputPassword" class="labels">Foto</label>  
                        </div>
						<div class="form-label-group">
						
						<textarea name="desc" ><?php echo $f['descripcion'];?></textarea>
						<br>
                         <label class="labels">Descripcion</label>  
                        </div>
						
						<div class="form-label-group">
                            <input type="text"  class="form-control" name="especie"
                                   value=<?php echo $f['especie'];?> required>
                         <label  class="labels">Especie</label>   
                        </div>
						
						<div class="form-label-group">
                            <input type="text"  class="form-control" name="generacion"
                                  value=<?php echo $f['generacion'];?> required>
                         <label  class="labels">Generacion</label>   
                        </div>
						
						
						
                        <br>
						<button class="btn btn-lg btn-block submit"
                                type="submit" name="guardar" value=guardar  >Guardar</button>
								
				<?php
				}//fin while
				?>
							
								
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
