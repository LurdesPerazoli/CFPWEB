 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/estilo.css">
 	<header>
      <div class="container text-center">
  <div class="row justify-content-start">
   
  <div class="row justify-content-evenly">
    <div class="col-4">
      <h1> Lurdes Perazoli </h1>
    </div>
    <div class="col-4">
      <img src="img/mifoto.jpg">
    </div>
  </div>
</div>
          
   </header>
<?php
include("conexion.php");

 $empresa=$_POST['empresa'];
 $puesto=$_POST['puesto'];
 $sueldo=$_POST['sueldo'];
 $telefono=$_POST['telefono'];
 $mail=$_POST['mail'];

echo "Contacto realizado, a la brevedad me estare poniendo en contacto con ud. Muchas gracias";

 $sql="INSERT INTO contactos VALUES('$empresa','$puesto', '$sueldo', '$telefono', '$mail')";
// a donde se conecta - que tiene que hacer
if(mysqli_query($conexion,$sql)){
	echo "datos insertados";
}
else{
	echo "oops 2";
}

?>