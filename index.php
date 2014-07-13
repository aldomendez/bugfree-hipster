<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apps de LR4</title>
  <link rel="stylesheet" href="./packaged/css/semantic.min.css">
</head>
<body>
  <!-- El contenido del template se carga aqui -->
  <div class="ui one column page grid" id="content"></div>

  <!-- El template lo carga `php` aqui -->
  <script id="template" style="display: none;" type='text/ractive'>
    <?php include "template.php" ?>
  </script>
  
  <!-- mousetrap es el responsable de escuchar las teclas presionadas -->
  <script src="../jsLib/mousetrap/mousetrap.min.js"></script>
  <script src="../jquery/jquery.js"></script>
  <!-- El controlador de elementos visuales -->
  <script src="../jsLib/ractivejs/ractive.js"></script>
  <script src="js/app.js"></script>
</body>
</html>