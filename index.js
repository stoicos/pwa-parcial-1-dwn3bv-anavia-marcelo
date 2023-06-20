window.addEventListener('DOMContentLoaded', function() {

    //menu responsive
    const menu = document.querySelector('.menu-icon')
    let nav = document.querySelector('.menu-container');
    //toggle para activar/desactivar los estilos del menu
    menu.addEventListener('click', () => {
        nav = document.querySelector('.menu-container');
        nav.classList.toggle('active');
    })

    //api externa para cargar socios aleatorios con fetch
    const DIV = document.querySelector('.container-socios');
    const BUTTON_FETCH = document.querySelector('#versocios');
    BUTTON_FETCH.addEventListener('click', function(){
        for(let i = 0; i < 3; i++){
            fetch('https://randomuser.me/api/')
            .then(response => response.json())
            .then(data => {
                console.log(data);
                DIV.innerHTML += `
                    <div class="tarjeta">
                        <img src="${data.results[0].picture.large}">
                        <p><span class="hand-font">Nombre:</span> ${data.results[0].name.first} ${data.results[0].name.last}</p>
                        <p><span class="hand-font">Contacto:</span> ${data.results[0].email}</p>
                        <p><span class="hand-font">País:</span> ${data.results[0].location.country}</p>
                    </div>
                `;
            });
        };
    });
});

//registro el service worker
if (navigator.serviceWorker) {
    console.log("ServiceWorker listo para usar");
    navigator.serviceWorker.register('serviceworker.js');
} else {
    console.log('No se puede usar ServiceWorker');
}