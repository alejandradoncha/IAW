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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $pedido = $_POST["pedido"];
  $como_encontro = $_POST["como_encontro"];

  // Aquí se podría incluir el código para enviar el pedido por correo electrónico o guardarlo en una base de datos.

  // Redirigir a la página de resumen de pedido con los datos del pedido en la URL
  header("Location: resumen_pedido.php?nombre=$nombre&email=$email&telefono=$telefono&pedido=".urlencode(implode(", ", $pedido))."&como_encontro=$como_encontro");
  exit();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required><br>

  <label for="telefono">Teléfono:</label>
  <input type="tel" name="telefono" required><br>

  <label for="pedido">Pedido:</label><br>
  <input type="checkbox" name="pedido[]" value="Barras de pan"> Barras de pan<br>
  <input type="checkbox" name="pedido[]" value="Bollos"> Bollos<br>
  <input type="checkbox" name="pedido[]" value="Pan de bocatas"> Pan de bocatas<br>

  <label for="como_encontro">¿Cómo encontró la página web?</label><br>
  <select name="como_encontro" required>
    <option value="" disabled selected>Selecciona una opción</option>
    <option value="Buscando en Google">Buscando en Google</option>
    <option value="A través de un amigo">A través de un amigo</option>
    <option value="Redes sociales">Redes sociales</option>
    <option value="Otros">Otros</option>
  </select><br>

  <input type="submit" value="Enviar Pedido">
</form>

</body>
</html>