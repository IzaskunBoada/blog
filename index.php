<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
    <title>JILD Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--<link href="css/blog-home.css" rel="stylesheet">-->
    <!-- js del login -->
    <script src="js/md5.js"></script>
    <!--<script src="js/login.js"></script>-->
  </head>
  <body>
    <!-- Navigation -->
    <?php
      session_start();
      $_SESSION['usuario'] = null;
      require_once("cabecera.php");
      require_once("funciones.php");
    ?>
    <!-- Page Content -->
    <div class="container">
      <br>
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <h1 class="my-4"><br>
            
          </h1>
          <!-- Blog Post -->
         <?php 
            $dwes = ConexionTotal();
            if(!$dwes)
            {
              echo" <table>
                      <tr>
                      <td align='left'>Error</td>
                        <td align='left'>Error interno en la bd</td>
                        <td align='right'><input type='submit' name='Modificar'></td>
                        <td align='right'><input type='submit' name='Eliminar'></td>
                       </tr>
                     </table>";
            }
            else
            {
              $sql = "SELECT titulo, imagen, texto, fecha FROM Post";
              $year = "SELECT YEAR(fecha) FROM Post"; //año
              $mes = "SELECT MONTH(fecha) FROM Post"; //mes
              $dia = "SELECT DAY(fecha) FROM Post"; //dia

              $resultyear  = $dwes->query($year);
              $resultmes = $dwes->query($mes);
              $resultdia = $dwes->query($dia);


              $result = $dwes->query($sql);
              //&& $resultdia->num_rows > 0 && $resultmes->num_rows > 0 && $resultyear->num_rows > 0
              //&& $filadia = $resultdia->fetch_assoc() && $filames = $resultmes->fetch_assoc() && $filayear = $resultyear->fetch_assoc()
              if($result->num_rows > 0 )
              {
                while ($fila = $result->fetch_assoc() ) {
                  //<!--psteado el 14 de agosto de 2017-->
              list($anio, $mesnum, $dia) = explode("-",$fila['fecha']); 
                    
                    switch ($mesnum) {
                      case '01':
                        $mes="Enero";
                        break;
                      case '02':
                        $mes="Febrero";
                        break;
                      case '03':
                        $mes="Marzo";
                        break;
                      case '04':
                        $mes="Abril";
                        break;
                      case '05':
                        $mes="Mayo";
                        break;
                      case '06':
                        $mes="Junio";
                        break;
                      case '07':
                        $mes="Julio";
                        break;
                      case '08':
                        $mes="Agosto";
                        break;
                      case '09':
                        $mes="Septiembre";
                        break;
                      case '10':
                        $mes="Octubre";
                        break;
                      case '11':
                        $mes="Noviembre";
                        break;
                      case '12':
                        $mes="Diciembre";
                        break;
                      default:
                        break;
                    }



                  //echo($fila['fecha']);
              echo"<div class='card mb-4'>
                      <img class='card-img-top' src='".$fila['imagen']."'>
                        <div class='card-body'>
                          <h2 class='card-title'>".$fila['titulo']."</h2>
                          <p class='card-text'>".$fila['texto']."</p>
                        </div>
                        <div class='card-footer text-muted'>Posteado el $dia de $mes de $anio</div>
                      </div>
                    
              ";
                }
              }
              else
              {
                echo"
                <table>
                <tr>
                  <td align='left'>Inexistente</td>
                    <td align='left'>No hay ningun post introducido</td>
                    <td align='right'><input type='submit' name='Modificar'></td>
                    <td align='right'><input type='submit' name='Eliminar'></td>
                   </tr>
                   </table>";
              }
            }
            $dwes = desconexionTotal($dwes);              
          ?>
          <!-- Blog Post -->
          
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Buscar post</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Diseño Web</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutoriales</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Ultimas entradas</h5>
            <div class="card-body">
              EN PROCESO DE PROGRAMACION
            </div>
          </div>
          <div class="card my-4">
            <h5 class="card-header">Blogs de interes</h5>
            <div class="card-body">
              EN PROCESO DE PROGRAMACION
            </div>
          </div>
          <div class="card my-4">
            <h5 class="card-header">Redes sociales</h5>
            <div class="card-body">
              EN PROCESO DE PROGRAMACION
            </div>
          </div>
        </div>
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
