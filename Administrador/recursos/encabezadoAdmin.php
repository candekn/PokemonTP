<nav class="navbar justify-content-between">
      <a class="navbar-brand" href="IndexAdmin.php"></a>
	 <!--Recibe por parametro el id de la imagen seleccionada-->
	
	 
	<!--botones para borrar, nuevo, y modificar-->	 
<form id="form1" name="form1" method="post" action="procesa.php" >
	<button class="btn submit buscar" name="btnLog" type="submit" value="Nuevo" >Nuevo Poke</button>
</form>
	  
	  
      <form class="form-inline" method="post" action="IndexFuncion2Admin.php">
									   
  <input class="form-control mr-sm-3" name="buscar" type="search" placeholder="Buscar..." aria-label="Search" required>
  <button class="btn submit buscar" name="enviar" type="submit" >Buscar</button>
					
			 </form>
    </nav>


