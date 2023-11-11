function cargarContenidoFetch(abrir) {
    var contenedor;
    contenedor = document.getElementById('principal');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function pregunta4(abrir) {
    cargarContenidoFetch(abrir);
    var titulo = document.getElementById('titulo');
    var historial = document.getElementById('historial');
    titulo.innerHTML = "PREGUNTA 4";
    historial.innerHTML += "Presiono 4 <br>"
}
function insertarLibro() {
    var contenedor = document.getElementById("principal");
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












