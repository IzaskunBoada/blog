<?php
//session_start();
if(isset($_SESSION['usuario']))
{
  include("funciones.php");
  $Nombre = sacarNombreUsuario($_SESSION['usuario']);
  ?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
    </head>
    <body>
      <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">JILD Blog</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!--CABECERA DE ADMINISTRADOR-->
              <span style="color:red;">Bienvenido Señor:
              <?php
                echo $Nombre;
              ?>
              </span>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto" id="ul_inicio">
                  <li id="inicio" class="nav-item active">
                    <a class="nav-link" href="admin.php">Post
                     
                    </a>
                  </li>
                  <li class="nav-item" id="nosotros">
                    <a class="nav-link" href="#" id="mostrar_post">Comentarios</a>
                  </li>
                  
                </ul>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><input type="submit" value="Cerrar Sesión" id="cerrarsesion"></a>
                </li>
              </div>

            </div>
          </nav>
    </header>
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
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">JILD Blog</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!--CABECERA DE USUARIO-->
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto" id="ul_inicio">
                  <li class="nav-item active" id="inicio">
                    <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item" id="nosotros">
                    <a class="nav-link" href="nosotros.php">Sobre nosotros</a>
                  </li>
                  <li class="nav-item" id="post">
                    <a class="nav-link" href="post.php">Post</a>
                  </li>
                  <li class="nav-item" id="contacto">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                  </li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"><input type="submit" value="Iniciar Sesión"></a>
                </li>
              </div>
            </div>
          </nav> 
		</header>
	</body>
	</html>
	<?php
}
?>