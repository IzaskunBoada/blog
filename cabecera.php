<?php
session_start();
if(isset($_SESSION['usuario']))
{
  ?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" href="funciones.php">
    </head>
    <body>
      <h1>fdghfsd</h1>
    </body>
    </html>
  <?php
}
else
{
	?>
	<!DOCTYPE html>
	<html lang="es">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/blog-home.css" rel="stylesheet">
      <script src="js/md5.js" type="text/javascript"></script>
  	</head>
	<body>
		<header>
          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">JILD Blog</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                  </li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"><input type="submit" value="enviar"></a>
                </li>
              </div>
            </div>
          </nav> 
		</header>
	</body>
	</html>
	<?php
	require_once("index.php");
}
?>