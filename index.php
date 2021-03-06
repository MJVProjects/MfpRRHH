<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MFP Recursos Humanos</title>
    <link rel="icon" href="./img/icf.jpg" >
    <!-- estilos globales -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Boostrap -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <!-- header -->
    <link rel="stylesheet" href="css/header.css">
    <!-- Vision Mision -->
    <link rel="stylesheet" href="css/mv.css">
    
    <!-- nosotros -->
    <link rel="stylesheet" href="css/nosotros.css"> 


  </head>
  <body>

     <?php 
     include_once 'views/header.html';
     include_once 'views/carrucel.html';
     include_once 'views/mv.html';
     include_once 'views/nosotros.html';

      // <!-- FOOTER -->

    include_once 'views/whatsapp.html';

    include_once 'views/footer.html';
    
    ?>
    </main>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/header.js"></script>
  </body>
</html>