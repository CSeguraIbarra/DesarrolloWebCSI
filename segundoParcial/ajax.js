function cargarContenidoBtn(abrir) {
	var contenedor;
	contenedor = document.getElementById('botones');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			console.log(ajax)
			console.log(abrir)
			console.log(contenedor)
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('principal');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			console.log(ajax)
			console.log(abrir)
			console.log(contenedor)
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function pregunta3(abrir){
	cargarContenido(abrir);
	var titulo = document.getElementById('titulo');
	var historial = document.getElementById('historial');
	titulo.innerHTML = "PREGUNTA 3";
	historial.innerHTML += "Presiono 3 <br>"
}
function pregunta1() {
	var principal = document.getElementById('principal');
	var titulo = document.getElementById('titulo');
	var historial = document.getElementById('historial');
	principal.innerHTML = "";
	titulo.innerHTML = "PREGUNTA 1";
	historial.innerHTML += "Presiono 1 <br>"
}
function pregunta2() {
	var titulo = document.getElementById('titulo');
	var historial = document.getElementById('historial');
	var principal = document.getElementById('principal');

	titulo.innerHTML = "PREGUNTA 2";
	historial.innerHTML += "Presiono 2 <br>"
	principal.innerHTML = `<div id="todo">
<div id="tabla">
    <div id=header>
	<div>
		<label for="numero">Tabla del</label>
		<input type="number" id="numero" min="1">
	</div>
	<div>
		<input type="radio" name="operacion" value="+">Suma<br>
		<input type="radio" name="operacion" value="-">Resta<br>
		<input type="radio" name="operacion" value="!">Factorial<br>
	</div>
	<div>
		<label for="numerolimite">&nbsp;&nbsp;&nbsp;Hasta el</label>
		<input type="number" id="numerolimite" min="1">
	</div>
	<div>
		<button onclick="javascript:generarTabla()">Calcular</button>
	</div>
	 </div>
	 <div id="resultado">

	 </div>
</div>`;
}
function generarTabla() {
	var numero = parseInt(document.getElementById('numero').value);
	var operacion = document.querySelector('input[name="operacion"]:checked').value;
	var numerolimite = parseInt(document.getElementById('numerolimite').value);
	var resultado = document.getElementById('resultado');
	resultado.innerHTML = "";
	var result=1;
	if (operacion == "+" || operacion == "-") {
		var tabla = "<table border='1'>";
		for (i = 1; i <= numerolimite; i++) {
			result = eval(numero + operacion + i);
			tabla+= `<tr><td>${numero}</td><td>${operacion}</td><td>${i}</td><td>=</td><td>${result}</td>`;
		}
		tabla+="</table>";
		resultado.innerHTML = tabla;
	}else if(operacion=="!"){
		var tabla = "<table border='1'>";
			for(i=1;i<=numero;i++){
				result*=i;
			}
			tabla+= `<tr><td>Factorial</td><td>${numero}</td><td>${result}</td>`;
			resultado.innerHTML=tabla;
	}
}
function sumar(){
	var contenedor;
    contenedor = document.getElementById('form2');
    var n = parseInt(document.getElementById('n').value);
	
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", "introducir.php?n="+n, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}





