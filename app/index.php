<?php
/*
// http://localhost/index.php
// echo phpinfo();

// Mongo exprress - localhost:8081/ - u:mexpress p:mexpress
// phpMyAdmin - localhost:8085/ - u:root p:admin

// instancia la clase dMemcached
$m = new Memcached();
// agrego el servidor configurado y el puerto que escucha
$m->addServer('localhost', 11211);

// guardo el contenido de la clabe "pagina" si existe
$archivo = $m->get("pagina");
$contenido = "";

if ($archivo === false)
{
	// NO EXISTE!!!
	// configuro el nombre del archivo
	$nombre = './pagina.html';
	// abro el archvio en modo escritura
	$manejador = fopen($nombre, 'r');
	// leo el contenido del archivo y lo guardo en la variable
	$contenido = fread($manejador, filesize($nombre));
	// seteo el contenido de la variables en memcached con la clave "pagina"
	$m->set('pagina', $contenido, 15);
	$contenido = "<h3>Leo desde el archivo:</h3".$contenido;
}
else
{
	// EXISTE!!!
	// leo el contenido de la variable y lo guardo en la variable
	$contenido = "<h3>Leo desde memcached:</h3".$archivo;
}
*/
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Wilson Arriola">
        <meta name="generator" content="Hugo 0.104.2">
        <title>Taller NoSQL</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">
        <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="./assets/dist/css/starter-template.css" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-8 mx-auto p-4 py-md-5">
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                    <span class="fs-4">Taller NoSQL - Tecnoinf 2023</span>
                </a>
            </header>
            <main>
                <h1>Primeros paso con Docker</h1>
                <p class="fs-5 col-md-8">Configuraremos contenedores Docker para correr un servidor nginx, junto a php y mongoDB.</p>

                <hr class="col-3 col-md-2 mb-5">

                <div class="row g-5">
                    <div class="col-md-6">
                        <h2>Links para acceder a los servicios</h2>
                        <p>Estos servicios estan publicados en el Docker y listos para usar..</p>
                        <ul class="icon-list ps-0">
                            <li class="d-flex align-items-start mb-1"><a href="http://localhost:80/" rel="noopener" target="_blank">php</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="http://localhost:27017/" rel="noopener" target="_blank">mongoDB</a></li>
                            <li class="d-flex align-items-start mb-1">u:root p:root</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h2>Servicios</h2>
                        <p>Lista de servicios publicados.</p>
                        <ul class="icon-list ps-0">
                            <li class="d-flex align-items-start mb-1">nginx</li>
                            <li class="d-flex align-items-start mb-1">php</li>
                            <li class="d-flex align-items-start mb-1">mongo</li>
                        </ul>
                    </div>
                </div>

                <hr class="col-3 col-md-2 mb-5">

                <h2>Test Rest</h2>
                <p class="fs-5 col-md-8">Como ejemplo de test, enviaremos una petición api rest a la pagina de repositorios de git hub.</p>
                <ul class="icon-list ps-0">
                    <li class="d-flex align-items-start mb-1"><a href="http://localhost/rest.php" rel="noopener" target="_blank">test 1</a></li>
                </ul>

            </main>
            <footer class="pt-5 my-5 text-muted border-top">
                Wilson / Nico / Damian &middot; &copy; 2023
            </footer>
        </div>
        <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>