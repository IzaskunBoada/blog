<?php 
  require_once("funciones.php");
?>
<script type="text/javascript" src="jquery/jquerys.js"></script>
<form class='card my-4'>
  <fieldset class='m-md-2'>
    <table style='width: 100%;' cellpadding='5'>
      <tr>
        <td align='left'><label><b style='font-size: 22px'>Post</b></label></td>
        <td align='right'>
          <label>Categorias:</label>
          <select name='categoria'>";
            <?php
              $dwes = ConexionTotal();
              if($dwes == 0)
              {
                echo"<option value='error'>Error</option>";
              }
              else
              {
                $sql = "SELECT * FROM Categoria";
                $result = $dwes->query($sql);
                if($result)
                {
                  while ($fila = $result->fetch_assoc()) {
                    echo"<option value='".$fila['id_categoria']."'>".$fila['Nombre']."</option>";
                  }
                }
                else
                {
                  echo"<option value='inexistente'>-----</option>";
                }
              }
            ?> 
          </select>
        </td>
        <td align='left'><input type='submit' id='' name='buscar' value='Buscar'></td>
        <td align='right'><input type='submit' id='ventana_agregar_post' name='anadir' value='Añadir'></td>
      </tr>
    </table>
    <table class='table-view' border='1' cellpadding='5'>
      <tr>
        <td align='left'>Titulo</td>
        <td align='left'>Descripcion breve pero haber si ahce esto</td>
        <td align='right'><input type='submit' name='Modificar'></td>
        <td align='right'><input type='submit' name='Eliminar'></td>
      </tr>
    </table>
  </fieldset>
</form>