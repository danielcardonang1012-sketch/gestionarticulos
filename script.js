const filas = document.querySelectorAll("tr");

filas.forEach((fila, index) => {

    fila.style.animation =
    `entrada 0.5s ease ${index / 10}s forwards`;

});