<?php
function sacarUsuario($nombre, $password){
	require_once("conexion.php");
	$dwes = Conectar();
	if($dwes != null)
	{	
		$sql = "SELECT id_usuario FROM Usuario WHERE Nombre = '$nombre' AND Password = '$password'";
		$result = $dwes->query($sql);
		if($result)
		{
			$row = $result->fetch_assoc();
			if(count($row) > 0)
			{
				return $row["id_usuario"];
			}	
			else
			{
				return 0;
			}
		}
		else{
			return 0;
		}
		Desconectar($dwes);
	}
}
?>