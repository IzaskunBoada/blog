<?php
echo "<br><br><br><br>";
session_start();
if(isset($_SESSION['usuario']))
{
	$id_usuario = $_SESSION['usuario'];
}
if(isset($_POST["titulo"]))
{
	$titulo = $_POST["titulo"];
}
if(isset($_POST['archivo']))
{
	$imagen = $_POST['archivo'];
}
if(isset($_POST['editor1']))
{
	$texto = $_POST['editor1'];
}
if(isset($_POST['categoria']))
{
	$id_categoria = $_POST['categoria'];
}
$fecha=strftime( "%Y-%m-%d",time());
//A-PARTIR-DE-AQUI-COMPROBAR-QUE-INSERTE
if($id_usuario != null || $titulo != null || $imagen != null || $texto != null || $id_categoria != null || $fecha != null)
{
	require_once("funciones.php");
	$dwes = ConexionTotal();
	if($dwes == 0)
	{
		echo "Error 1";
	}
	else
	{
		$sql = "INSERT INTO Post (id_post, id_usuario, fecha, titulo, imagen, texto, id_categoria) VALUES (null,'$id_usuario','$fecha','$titulo','$imagen','$texto','$id_categoria')";
		$result = $dwes->query($sql);
		if($result)
		{
			echo "Guardado";
		}
		else
		{
			echo "Error 2";
		}
	}
}
else
{
	echo "Error 3";
}
?>