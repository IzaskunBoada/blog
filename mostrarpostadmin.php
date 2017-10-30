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
          <?php
            include("mostrarcategorias.php");
          ?>
        </td>
        <td align='left'><input type='button' id='' name='buscar' value='Buscar'></td>
        <td align='right'><input type='button' id='ventana_agregar_post' name='anadir' value='Añadir'></td>
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