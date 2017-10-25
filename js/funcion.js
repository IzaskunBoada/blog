window.onload = function(){
	document.getElementyById('botonlogin').onclick = encriptar;
}
function encriptar()
{
	var pass = document.form_login.password.value;
	var hash = hex_md5(pass);
	document.form_login.password.value=hash;
	document.form_login.submit();
}