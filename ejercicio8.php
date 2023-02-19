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
    /* Subir al directorio imagenes una imagen seleccionada 
    por el usuario siempre que sea GIF o JPG y no pase de 200kb, 
    a este directorio y luego mostrará todas las imágenes que se 
    hayan subido.
    */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "imagenes/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
        // Verificar si el archivo es una imagen válida (JPG o GIF) y no excede los 200kb
        if(($imageFileType == "jpg" || $imageFileType == "gif") && $_FILES["fileToUpload"]["size"] <= 200000) {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "La imagen ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido subida.";
          } else {
            echo "Hubo un error al subir la imagen.";
          }
        } else {
          echo "Solo se permiten archivos JPG o GIF y no deben exceder los 200kb.";
        }
      }
      
      // Mostrar todas las imágenes en el directorio 'imagenes'
      $directory = "imagenes/";
      $files = glob($directory . "*.{jpg,gif}", GLOB_BRACE);
      foreach($files as $image) {
        echo '<img src="'.$image.'" alt="'.$image.'">';
      }
      ?>
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        Seleccione una imagen para subir:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Subir Imagen" name="submit">
      </form>
    
    
</body>
</html>