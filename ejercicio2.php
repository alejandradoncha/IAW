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
      /* Imprime en pantalla  los números impares del 1 al 100 y su suma 
      acumulada, usando la estructura if.*/
    $suma = 0;

    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 != 0) { // verifica si el número es impar
      echo $i . "<br>";
      $suma += $i; // suma el número a la variable $suma
  }
}
      echo "LA SUMA DE TODOS LOS NÚMEROS IMPARES ES: " . $suma;
?>

    
</body>
</html>