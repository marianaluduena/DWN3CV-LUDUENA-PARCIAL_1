<?php

// Variables que obtenrán datos del usuario del formulario

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["email"];
$telefono = $_POST["telefono"];
$comentarios = $_POST["comentarios"];

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<!DOCTYPE html>

<html lang="es">
<div class="container justify-content-center">
    <h1 class="text-sm-start text-md-center">Datos del usuario obtenidos</h1>

<?php 
echo "<p>". $nombre;

?>
</div>
</html>