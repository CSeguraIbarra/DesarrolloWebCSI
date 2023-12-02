function pregunta1(){
	var submenu=document.getElementById('submenu');
	var contenido=document.getElementById('contenido');
    var titulo=document.getElementById('titulo');
    titulo.innerHTML='Pregunta 1';
	submenu.innerHTML="";
	contenido.innerHTML="";
}
function pregunta2(){
	var titulo=document.getElementById('titulo');
    titulo.innerHTML='Pregunta 2';
    var contenedor=document.getElementById('submenu');

    var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", "pregunta2.html", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function generarOperacion(signo){
	var cantidad=document.getElementById('cantidad').value;
	var contenido=document.getElementById('contenido');
	contenido.innerHTML="";
	for(let i=0;i<cantidad; i++){
		numero1= Math.floor(Math.random()*10);
	    numero2= Math.floor(Math.random()*10);
		result=eval(numero1+signo+numero2);
	contenido.innerHTML+=`<div>${numero1} ${signo} ${numero2} ${ ' = ' } <input type="number" name="numeros" id="${i}">
	<input type="hidden" name="resultados" value="${result}"></div><br>`;
	}
	contenido.innerHTML+=`<button onclick="corregir()">Corregir</button>`
}
function corregir(){
	var numeros= document.getElementsByName('numeros');
	var resultados=document.getElementsByName('resultados');
	for(i=0;numeros.length;i++){
		var operacion=document.getElementById(i);
		if(parseInt(numeros[i].value) == parseInt(resultados[i].value)){
			operacion.style.backgroundColor='green';
		}
		else{
			operacion.style.backgroundColor='red';
		}
	}
}

function pregunta4(){
	var titulo=document.getElementById('titulo');
    titulo.innerHTML='Pregunta 4';
	var submenu=document.getElementById('submenu');
	contenedor = document.getElementById('contenido');
    fetch('pregunta4.php')
        .then(response => response.text())
        .then(data => submenu.innerHTML = data);
	
}
function listar(abrir){
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
	    .then(response => response.text())
	    .then(data => contenedor.innerHTML = data);
}
function cargarContenidoFetch(abrir) {
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function insertar(){
	cargarContenidoFetch('forminsertar.html')
}
function insertarLibro() {
    var contenedor = document.getElementById("contenido");
    var formulario = document.getElementById("form_libro");
    var parametros = new FormData(formulario);
    fetch("insertar.php",
        {
            method: "POST",
            body:parametros
        })
        .then(response => response.text())
        .then(data => {contenedor.innerHTML = data
        cargarContenidoFetch('listar.php');
});
}

 function pregunta5(){
	var titulo=document.getElementById('titulo');
    titulo.innerHTML='Pregunta 5';
	cargarContenidoFetch('pregunta5.html')
//menu, titulo, contenido,sub-menu,pie
}
function modificar(){
	//alert('entro');
	var selected=document.getElementById('selected').value;
	var color=document.getElementById('color').value;

	var titulo=document.getElementById('titulo');
	var contenido=document.getElementById('contenido');
	var menu=document.getElementById('menu');
	var submenu=document.getElementById('sub-menu');
	var pie=document.getElementById('pie');

	if(selected == 'titulo'){
		titulo.style.backgroundColor=color;
	}else if(selected=='contenido'){
		contenido.style.backgroundColor=color;
	}else if(selected=='menu'){
		menu.style.backgroundColor=color;
	}else if(selected=='sub-menu'){
		submenu.style.backgroundColor=color;
	}else if(selected=='pie'){
		pie.style.backgroundColor=color;
	}
}