$(document).ready(function(){
	$('#mostrar_post').click(function(event){
		$("#div_dinamico_admin").load('mostrarpostadmin.php');
	});
	$('#ventana_agregar_post').click(function(event){
		$("#div_dinamico_admin").load('ventanacrearpost.php');
	});
});