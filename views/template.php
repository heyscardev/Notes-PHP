<!DOCTYPE html>
<html lang="es">

<head>
<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes</title>
  <link  rel="icon"   href="images/favi_ico.png" type="image/png" />
  <link rel="stylesheet" href="./css/style.css?v=<?php echo(rand()); ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<?php

require_once('router.php');

?>



