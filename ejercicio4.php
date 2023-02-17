<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /* Imprime en pantalla los números múltiplos de 5, comprendidos entre el 1 y el 100. 
    Usa la estructura for. Devuelve el cuadrado de su suma.*/
$suma = 0;
    
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 5 == 0) { // verifica si el número es múltiplo de 5
            echo $i . "<br>";
    $suma += $i; // suma el número a la variable $suma
    }
}

    $cuadrado_suma = $suma * $suma;
    echo "El cuadrado de la suma de los múltiplos de 5 es: " . $cuadrado_suma;
?>

    
</body>
</html>