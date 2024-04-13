<?php
$base="contactos_cv";
$conexion=mysqli_connect("localhost","root","",$base);
if($conexion){
	echo "Sistema conectado";
	
}else{
	echo "Error";
}
?>