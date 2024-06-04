<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //ejercicio 1

    $num= 3;
    for($i= 1; $i <= 10; $i++){
        $columna= $num*$i;
        echo $i. ' x '.$num .'= '.$columna.'<br><br>'; 
    }

    //ejercicio 2
$mes =20;
if ($mes = 1) {
    echo "Mes Enero<br> Estacion Verano<br> ";
}
else if ($mes = 2){
    echo "Mes Febrero<br> Estacion Verano<br>";
}
else if ($mes = 3){
    echo "Mes Marzo<br> Estacion Otoño<br>";
}
else if ($mes = 4){
    echo "Mes Abril<br> Estacion Otoño<br>";
}
else if ($mes = 5){
    echo "Mes Mayo<br> Estacion Otoño<br>";
}
else if ($mes = 6){
    echo "Mes Junio<br> Estacion Invierno<br>";
}
else if ($mes = 7){
    echo "Mes Julio<br> Estacion Invierno<br>";
}
else if ($mes = 8){
    echo "Mes Agosto<br> Estacion Invierno<br>";
}
else if ($mes = 9){
    echo "Mes Septiembre<br> Estacion Primavera<br>";
}
else if ($mes = 10){
    echo "Mes Octubre<br> Estacion Primavera<br>";
}
else if ($mes = 11){
    echo "Mes Noviembre<br> Estacion Primavera<br>";
}
else if ($mes = 12){
    echo "Mes Diciembre<br> Estacion Verano";
    
}

else {
    echo "Error <br>";
}


$numero=34;
$suma= 0;
if($numero <=0){
    echo 'Error';
}
else{
    for($i=1; $i<=$numero; $i++){
    $suma = $suma + $i;
    }
echo 'La suma de todos los numero es:'.$suma;
}

?>
</body>
</html>