<?php

// Variables que obtenrán datos del usuario del formulario

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["email"];
$telefono = $_POST["nroTel"];
$direccion = $_POST["direccion"];
$provincia = $_POST["provincia"];
$anioNac = $_POST["anio__nacimiento"];
$magiaFavorita = $_POST["magiaFav"];
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

echo "<p> Nombre completo: ". $nombre . " ". $apellido."</p>";
echo "<p> Mail:  ". $mail. "</p>";
echo "<p> Número de teléfono:  ". $telefono. "</p>";
echo "<p> Domicilio:  ". $direccion. "</p>";
echo "<p> Provincia:  ". $provincia. "</p>";
echo "<p> Año de nacimiento:  ". $anioNac. "</p>";


switch($magiaFavorita){
    case 1:
        echo "<p> Su rama favorita de la magia es: Manipulación" . "</p>";
        break;
        case 2:
            echo "<p> Su rama favorita de la magia es: Escapismo". "</p>";
            break;
            case 3:
                echo "<p> Su rama favorita de la magia es: Cartomagia". "</p>";
                break;
                case 4:
                    echo "<p> Su rama favorita de la magia es: Magia de Escenario". "</p>";
                    break;
                    case 5:
                        echo "<p> Su rama favorita de la magia es: Mentalismo". "</p>";
                        break;

}

?>
</div>
</html>