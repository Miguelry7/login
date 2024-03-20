// Obtener el elemento de texto en la barra lateral
const creditos = document.getElementById('creditos');

// Obtener el contenedor principal
const contenedorPrincipal = document.getElementById('content');

// URL del archivo HTML que deseas cargar
const urlContenidoHTML = 'creditos.html';

// Agregar un evento de clic al texto en la barra lateral
creditos.addEventListener('click', () => {
    // Utilizar fetch para obtener el contenido del archivo HTML
    fetch(urlContenidoHTML)
        .then(response => response.text())
        .then(data => {
            // Insertar el contenido dentro del contenedor principal
            contenedorPrincipal.innerHTML = data;
            console.log("estoy en la funciona fetch");
        })
        .catch(error => {
            console.error('Error al cargar el contenido HTML:', error);
        });
});


const clientes = document.getElementById('clientes');
console.log(clientes);
// Obtener el contenedor principal


// URL del archivo HTML que deseas cargar
const urlcontenedorInicialHTML = 'clientes.html';

// Agregar un evento de clic al texto en la barra lateral
clientes.addEventListener('click', () => {
    // Utilizar fetch para obtener el contenido del archivo HTML
    console.log("estoy en función antes de fetch");
    fetch(urlcontenedorInicialHTML)
        .then(response => response.text())
        .then(data => {
            // Insertar el contenido dentro del contenedor principal
            contenedorPrincipal.innerHTML = data;
            console.log("estoy en la funciona fetch");
        })
        .catch(error => {
            console.error('Error al cargar el contenido HTML:', error);
        });
});

// Obtener el elemento de texto en la barra lateral
const panel_de_usuario = document.getElementById('panel_de_usuario');

// Obtener el contenedor principal
const contenedorDeInicio = document.getElementById('content');

// URL del archivo HTML que deseas cargar
const urlcontenedorDeIniciodoHTML = 'panel_de_usuario.html';

// Agregar un evento de clic al texto en la barra lateral
panel_de_usuario.addEventListener('click', () => {
    // Utilizar fetch para obtener el contenido del archivo HTML
    fetch(urlcontenedorDeIniciodoHTML)
        .then(response => response.text())
        .then(data => {
            // Insertar el contenido dentro del contenedor principal
            contenedorDeInicio.innerHTML = data;
            console.log("estoy en la funciona fetch");
        })
        .catch(error => {
            console.error('Error al cargar el contenido HTML:', error);
        });
});
