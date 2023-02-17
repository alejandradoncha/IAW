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
    /* Desarrolla el código necesario para redondear un número cualquiera 
    con hasta tres cifras decimales, sin usar la función round.*/
        function redondear($numero) {
            $parte_entera = floor($numero);
            $parte_decimal = $numero - $parte_entera;
            $redondeo = floor($parte_decimal * 1000);
            $redondeo /= 1000;
            $resultado = $parte_entera + $redondeo;
        return $resultado;
}

        $numero = 3.14159265359;
        $redondeado = redondear($numero);
        echo "El número redondeado es: " . $redondeado;
    ?>

</body>
</html>