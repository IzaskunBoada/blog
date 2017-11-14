<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JILD Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap-reboot.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!--JQUERY-->
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery/jquery.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="jquery/jquerys.js"></script>
        <!--CSS-->
        <link href="css/blog-home.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--MD5-->
        <script src="js/md5.js"></script>
        <script src="js/funcion.js" type="text/javascript"></script>
  </head>
  <body>
    <!-- Navigation -->
    <?php
      //session_start();
      //$_SESSION['usuario'] = null;
      require_once("cabecera.php");
    ?>
    <!-- Page Content -->
    <div class="container">
      <br>
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <h1 class="my-4">JILD<br>
            <small>Titulo</small>
          </h1>
          <!-- Blog Post -->
          <div class="card mb-4">
            <!-- MODIFICADO -->
            <img class="imgNosotros" src="img/logoNosotros.png" alt="Card image cap" width="350" height="350">
            <div class="card-body">
              <h2 class="card-title">Descripcion de la Empresa</h2>
              <p class="card-text">JILD es una empresa fundada por 4 miembros fundada en el año 2017 cuyo ambito principal se centra en la realizacion de tutoriales y resolucion de problemas.</p><br>

              <h2 class="card-text">Localizacion</h2>
              <p class="card-text">La empresa está situada en Bilbao, Ornilla Doctor Kalea, 2<br>
                El teléfono de la empresa es el siguiente: +34 944 12 57 12<br>
                Nuestro horario es de 8:00 a 2:30</p><br>

              <h2 class="card-text">Contacto</h2>
              <p class="card-text"> Para cualquier tipo de consulta podeis escribirnos un mail a jildgrupo1@gmail.com o rellenar el formulario que os dejamos a continuacion. <a href="contacto.php">Contacto</a></p>
              
              <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11622.797473629109!2d-2.9027771!3d43.2577221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x328cb72d75d5411c!2sCIFP+Txurdinaga+LHII!5e0!3m2!1ses!2ses!4v1510572190777" width="425" height="350" frameborder="0" style="border:0" allowfullscreen></iframe><br>
            <!-- MODIFICADO -->
            </div>
          </div>
          <!-- Pagination -->
          
        </div>
        <!-- Sidebar Widgets Column -->
        
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php 
      require_once("footer.php");
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
