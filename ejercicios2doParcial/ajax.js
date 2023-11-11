function cargarContenido(abrir) {
	var mensaje = document.getElementById('mensaje');
	var ocupado = document.getElementById('ocupado');
	ocupado.innerHTML = "";
	mensaje.innerHTML="";

	var contenedor;
	contenedor = document.getElementById('contenido');
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
function marcar(id) {
	var casilla = document.getElementById(`${id}`);
	var mensaje = document.getElementById('mensaje');
	var ocupado = document.getElementById('ocupado');
	ocupado.innerHTML = "";

	if (mensaje.innerHTML == "") {
		mensaje.innerHTML = "Turno X";
	}

	if (casilla.innerHTML == 'X' || casilla.innerHTML == 'O') {
		ocupado.innerHTML = "(La casilla está ocupada)";
	} else if (mensaje.innerHTML == "Turno O") {
		mensaje.innerHTML = "Turno X";
		casilla.innerHTML = "O";
	} else if (mensaje.innerHTML == "Turno X") {
		mensaje.innerHTML = "Turno O";
		casilla.innerHTML = "X";
	}
}

function generarTabla(){
	var numero = parseInt(document.getElementById('numero').value);
	var operacion = document.querySelector('input[name="operacion"]:checked').value;
	var numerolimite = parseInt(document.getElementById('numerolimite').value);
	var resultado = document.getElementById('resultado');
	resultado.innerHTML = "";
	for (i = 1; i <= numerolimite; i++) {
		var result = eval(numero + operacion + i);
		resultado.innerHTML += numero + operacion + i + "=" + result + "<br>";
	}
}

function cambiar(id,nuevorol){
	var contenedor;
	contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax
	ajax.open("GET", 'update.php?id='+id+'&nuevorol='+nuevorol , true);
    ajax.onreadystatechange = function ( ) {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            cargarContenido('listar.php')
        }
    }

    ajax.send();    
}

function cargarLibros() {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();

    ajax.open("GET", 'datos.php', true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4 && ajax.status === 200) {
            var response = JSON.parse(ajax.responseText);

            var select = document.createElement('select');
            var imagenDiv = document.createElement('div');
            imagenDiv.setAttribute('id', 'imagenLibro');

            select.onchange = function () {
                var selectedBook = response[select.selectedIndex];
                var selectedImage = selectedBook.imagen;
                var selectedTitle = selectedBook.titulo;

                var img = document.createElement('img');
                img.src = selectedImage;
                img.alt = selectedTitle;

                imagenDiv.innerHTML = '';
                imagenDiv.appendChild(img);
            };

            for (var i = 0; i < response.length; i++) {
                var option = document.createElement('option');
                option.text = response[i].titulo;
                option.value = response[i].imagen;
                select.appendChild(option);
            }

            contenedor.innerHTML = '';
            contenedor.appendChild(select);
            contenedor.appendChild(imagenDiv);
        }
    };

    ajax.send();
}









