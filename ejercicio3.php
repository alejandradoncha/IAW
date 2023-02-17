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
    /* Imprime en pantalla el cuadrado de los números del 1 al 50, 
    ambos incluidos. Usa la estructura while. 
    Devuelve en pantalla la suma total. */
    $i = 1;
    $suma = 0;

        while ($i <= 50) {
        $cuadrado = $i * $i;
  echo "El cuadrado de " . $i . " es " . $cuadrado . "<br>";
    $suma += $cuadrado;
  $i++;
}

  echo "La suma total es: " . $suma;
?>

    
</body>
</html>