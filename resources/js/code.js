/* function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("contenido").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
} */

function incrementar(id) {
    valor = document.getElementById('cantidad' + id);
    console.log(valor);
    valor.value++;
}

function decrementar(id) {
    valor = document.getElementById('cantidad' + id).value;
    valor2 = document.getElementById('cantidad' + id);
    console.log(valor);
    if (valor > 0) {
        valor2.value--;
    }
}