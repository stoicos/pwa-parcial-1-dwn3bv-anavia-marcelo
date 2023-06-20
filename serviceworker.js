//hago mi cacheo
self.addEventListener('install', event => {

    console.log('SW: ', event);
    const instalacion = new Promise(async (resolve, reject) => {

        const cache = await caches.open('cache-1');
        await cache.addAll([
            '/',
            'index.php',
            'index.js',
            'styles/style.css',
            'json/productos.json',
            'classes/Producto.php',
            'manifest.json',
            'img/icons/icon-72x72.png',
            'img/icons/icon-96x96.png',
            'img/icons/icon-128x128.png',
            'img/icons/icon-144x144.png',
            'img/icons/icon-152x152.png',
            'img/icons/icon-192x192.png',
            'img/icons/icon-384x384.png',
            'img/icons/icon-512x512.png',
            'img/icons/flecha.svg',
            'img/icons/menu-icon-golden.svg',
            'img/icons/menu-icon.svg',
            'img/products/Caramel-Brownie-over.webp',
            'img/products/chocolate-chip-Brownie-over.webp',
            'img/products/Cinnamon-Cocoa-Brownie-over.webp',
            'img/products/cream-cheese-Brownie-over.webp',
            'img/products/espresso-nib-Brownie-over.webp',
            'img/products/mint-chocolate-Brownie-over.webp',
            'img/products/Original-Brownie-over.webp',
            'img/products/Pecan-Brownie-over.webp',
            'img/products/Raspberry-Swirl-Brownie-over.webp',
            'img/products/Toffee-Crunch-Brownie-over.webp',
            'img/products/Walnut-Brownie-over.webp',
            'img/products/White-Chocolate-Brownie-over.webp',
            'img/background/home-background-1.png',
            'img/background/home-background-2.png',
            'img/background/team.jpg'
        ]);

        await self.skipWaiting();
        resolve();
    });

    event.waitUntil(instalacion);
});

//Primero internet, luego cache. Si no hay conexión utilizo lo que guarde en cache-1. Una conexion lenta va a intentar cargar el sitio de todas maneras. Hago esta eleccion para que muestre contenido actualizado.
//En caso de necesitarlo, debo cambiar esta estrategia de cache por una que cargue el cache en caso de conexion lenta.
self.addEventListener('fetch', event => {

    const respuesta = fetch( event.request  ).then( respNet => {

        return caches.open('cache-1').then( cache => {

            cache.put( event.request,  respNet.clone() )
            return respNet;
        })

    }).catch( error => {

        return caches.match(  event.request  )
    })

    event.respondWith(  respuesta  )
});