function cargarContenido(abrir) {
	var contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function autenticar(){
	var contenedor = document.getElementById('contenido');
	var datos=new FormData();
	datos.append("usuario",document.getElementById("usuario").value);
	datos.append("contrasena",document.getElementById("contrasena").value);
	fetch("autenticar.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}


