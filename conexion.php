<?php
function Conectar()
{
	require_once("datos.php");
	$dwes = new mysqli();
	$dwes->connect("$localhost","$password","$usuario","$db");
	$error = $dwes->connect_errno;
	if($error != null)
	{
		echo "<p>Error $Error conectando a la base de datos: $dwes->connect_error</p>";
		return null;
	}
	else
	{
		return $dwes;
	}
}

function Desconectar($dwes){
	$dwes->close();
}

?>