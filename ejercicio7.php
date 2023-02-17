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
        /* Código PHP que dibuja 100 cuadrados en la pantalla 
        usando colores aleatorios.*/
        for ($i = 0; $i < 100; $i++) {
            $pos_x = rand(0, 500);
            $pos_y = rand(0, 500);
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);
            $color = "rgb($red, $green, $blue)";
            echo "<div style='position: absolute; left: {$pos_x}px; top: {$pos_y}px; width: 50px; height: 50px; background-color: $color;'></div>";
        }
    ?>

Este código generará 100 cuadrados de 50x50 píxeles en posiciones aleatorias de la pantalla, cada uno con un color aleatorio. Puedes ajustar el tamaño de los cuadrados y el rango de valores aleatorios para las posiciones y los colores según tus necesidades.

    
</body>
</html>