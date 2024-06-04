<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//para acceder a la pagina web http://localhost/php/prueba.php
echo "¡Hola, mundo! <br> ";

$nombre = "Juan";

$edad = 12;
if ($edad >= 18) {
echo "Eres mayor de edad.<br>";
} else {
echo "Eres menor de edad.<br>";
}

$frutas = array("Manzana", "Banana", "Cereza", "Durazno");
foreach ($frutas as $fruta) {
echo "Fruta: $fruta<br>";
}

$dia = 7;
switch ($dia) {
case 1:
echo "Hoy es Lunes<br>";
break;
case 2:
echo "Hoy es Martes<br>";
break;
case 3:
    echo "Hoy es Miércoles<br>";
break;
case 4:
echo "Hoy es Jueves<br>";
break;
case 5:
echo "Hoy es Viernes<br>";
break;
case 6:
echo "Hoy es Sábado<br>";
break;
case 7:
echo "Hoy es Domingo<br>";
break;
default:
echo "Número de día no válido<br>";
break;
}
function saludar($nombre) {
    echo "¡Hola, $nombre!<br>";
}
saludar($nombre);

define("PI", 3.1416);
echo "El valor de PI es: " . PI;

?>

</body>
</html>