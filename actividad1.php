<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// pagina http://localhost/php/actividad1.php
$nota = 74;
if ($nota >= 90) {
echo "Calificacion A<br>";
}
 else if ($nota >= 80 && $nota <= 89) {
    echo "Calificacion B<br>";
}
else if ($nota >= 70 && $nota <= 79) {
    echo "Calificacion C<br>";
}
 else {
echo "Calificacion F<br>";
}

$hora =20;
if ($hora < 12) {
    echo "Buenos Dias<br> ";
}
else if ($hora >=12 && $hora <=18){
    echo "Buenas Tardes<br>";
}
else {
    echo "Buenas Noches<br>";
}


$edad =65;
if ($edad < 18) {
    echo "Menor Edad<br> ";
}
else if ($edad >=18 && $edad<=64){
    echo "Adulto<br>";
}
else {
    echo "Persona Mayor<br>";
}















    ?>
</body>
</html>