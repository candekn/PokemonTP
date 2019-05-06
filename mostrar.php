<?php


$busca="";
$busca=$_POST['buscar'];
$conect = mysqli_connect("localhost","root","Cuc41515","pokemons");// si haces conexion desde
// internnet usa 3 parametros si es a nivel local solo 2
//$conect = mysqli_select_db("");//nombre de la base de datos


if($busca!=""){
$busqueda=mysqli_query($conect, "SELECT * FROM personajes WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda

?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">Id </td>
     <td width="61">Nombre: </td>
     <td width="157">Tipo: </td>
     <td width="221">Descripcion: </td>
     
   </tr>
 
<?php

while($f=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="19">'.$f['id'].'</td>';
echo '<td width="61">'.$f['nombre'].'</td>';
echo '<td width="157">'.$f['tipo'].'</td>';
echo '<td width="221">'.$f['descripcion'].'</td>';
echo '</tr>';
//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}

}
	
	

?>