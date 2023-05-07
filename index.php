<?php

// Se importa el archivo con la clase Efecto para poder usarlo

require_once "clases/Efecto.php";

// Defino cuáles serán las páginas/secciones válidas del sitio web

$pagsValidas = [

    "home" => [
        "titulo" => "Inicio",
    ],
    "nosotros" => [
        "titulo" => "Nosotros",
    ],
    "ramas" => [
        "titulo" => "Ramas de la magia",
    ],
    "productos" => [
        "titulo" => "Todos nuestros productos",
    ],
    "producto" => [
        "titulo" => "Detalle de producto",
    ],
    "beneficios" => [
        "titulo" => "Beneficios de la magia",
    ],
    "truco" => [
        "titulo" => "Probá éste truco",
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ],
    "acerca" => [
        "titulo" => "Acerca"
    ]
];

/* Creo un array con la superglobal GET en la var parametrosMiWeb
para ir guardando los nombres de las secciones/páginas del sitio
al las que el usuario será dirigido
*/

$parametrosMiWeb = $_GET;

// Si el usuario no envía ningún nombre de mi sitio, enviarlo al home

$pagina = $_GET["pag"] ?? "home";

// Verificar si un valor existe dentro del array $pagsValidas

if (!(array_key_exists($pagina, $pagsValidas))) {

    $entrada = "404";
    $tituloPag = "Página no encontrada";
} else {

    // $entrada será la sección solicitada por el usuario del sitio
    $entrada = $pagina;

    // Generar el título de cada página en forma dinámica

    $tituloPag = $pagsValidas[$pagina]["titulo"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon-->

    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Playfair+Display:ital,wght@0,500;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/tablet.css" />
    <link rel="stylesheet" href="./css/desktop.css" />

    <!-- Estilos-->

    <link rel="stylesheet" href="./bst/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./bst/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="./css/mobile.css" />
    <link rel="stylesheet" href="./css/tablet.css" media="(min-width: 576px)" />
    <link rel="stylesheet" href="./css/desktop.css" media="(min-width: 993px)" />

    <title>El baúl mágico: <?= $tituloPag ?> </title>
</head>

<body>

    <!-- Menú de navegación ORIGINAL-->

    <nav class="navbar navbar-expand-md">

        <!-- Barra de búsqueda sólo para mobile -->

        <form class="d-flex d-md-none m-auto my-2" role="search">
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Qué estás buscando?" aria-label="Search">
                <button class="btn btn-primary btn__small" type="submit">Buscar</button>
            </div>
        </form>

        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?pag=home">
                <img class="favicon" src="./img/varios/logo.png" alt="Cofre mágico abriéndose" width="70" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php?pag=home">Home</a>
                    <a class="nav-link active" aria-current="page" href="index.php?pag=nosotros">Nosotros</a>
                    <a class="nav-link active" href="index.php?pag=ramas">Tipos de magia</a>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="index.php?pag=productos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>

                        <ul class="dropdown-menu">

                            <!--CÓDIGO ORIGINAL -->

                            <ul class="ul-second">
                                <li class="niveles li__subcategorias text-center">
                                    Categorías
                                    <ul class="ul-third">
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=todos">Todos</a> </li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=cartomagia">Cartomagia</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=manipulacion">Manipulación</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=mentalismo">Mentalismo</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=magia__de__escenario">Escenario</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=escapismo">Escapismo</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="ul-second">
                                <li class="niveles li__subcategorias text-center">
                                    Niveles
                                    <ul class="ul-third">
                                        <li><a class="dropdown-item" href="index.php?pag=productos&nivel=todos">Todos</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&nivel=facil">Fácil</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&nivel=intermedio">Intemedio</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&nivel=dificil">Difícil</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- CÓDIGO PRUEBA DE DESPLEGAR LOS MENÚS: BORRAR SI NO FUNCIONA
                                <li class="text-center">
                                    Categorías
                                    <ul class="ul-third">
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=cartomagia">Cartomagia</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=manipulacion">Manipulación</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=mentalismo">Mentalismo</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=magia__de__escenario">Escenario</a></li>
                                        <li><a class="dropdown-item" href="index.php?pag=productos&rama=escapismo">Escapismo</a></li>
                                    </ul>
                                </li>
                           

                            Niveles

                           
                                <li class="text-center">
                                    Niveles
                                    <ul class="ul-third">
                                        <li class="dropdown-item li__subcategorias">Todos</li>
                                        <li class="dropdown-item li__subcategorias">Fácil</li>
                                        <li class="dropdown-item li__subcategorias">Intemedio</li>
                                        <li class="dropdown-item li__subcategorias">Difícil</li>
                                    </ul>
                                </li> -->






                        </ul>
                        <!-- li nav-item dropdown -->
                    </li>

                    <a class="nav-link active" href="index.php?pag=beneficios">Beneficios de la magia</a>
                    <a class="nav-link active" href="index.php?pag=truco">¡Probá éste truco!</a>
                    <a class="nav-link active" href="index.php?pag=contacto">Contacto</a>
                    <a class="nav-link active" href="index.php?pag=acerca">Acerca</a>
                </div>
            </div>

        </div>
    </nav>

    <header class="container d-flex justify-content-center">
        <h1 class="text-warning text-center d-none d-md-block">El baúl mágico</h1>
    </header>

    <main class="container">

        <?php

        // Función que verifica que un archivo existe

        require_once file_exists("paginas/$entrada.php") ? "paginas/$entrada.php" : "paginas/404.php";


        ?>

    </main>

    <footer class="container">

        <!-- Footer del sitio de la empresa-->

        <div class="container footer__empresa">
            <div class="row">

                <div class="col-md-4">
                    <h3>Newsletter</h3>

                    <hr />
                    <div class="container">
                        <label for="newsletter" id="newsletter" name="newsletter">
                            <input class="form-control d-lg-none" id="input__newsletter__sm__y__md" type="email" placeholder="Ingresá tu mail" required />

                            <!-- Input sólo versión lg-->

                            <input class="form-control d-none d-lg-block" id="input__newsletter" type="email" placeholder="Ingresá tu mail y recibí beneficios!" required />

                        </label>
                        <button type="submit" class="btn btn-primary form__btn" id="btn__newsletter">Enviar</button>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Nosotros</h3>

                    <hr />
                    <ul class="list-unstyled">
                        <a href="#nosotros">
                            <li>Historia</li>
                        </a>

                        <a href="index.php?pag=productos&rama=todos">
                            <li>Productos</li>
                        </a>

                        <li>Acerca de</li>
                        <li>Blog</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <div id="footer__logo">
                        <a href="./index.html"><img src="./img/varios/logo.png" alt="Cofre mágico abriéndose" width="70" height="50" /></a>
                        <h2 class="text-end" id="footer__titulo__empresa">El baúl mágico</h2>
                    </div>

                    <hr />
                    <ul class="list-unstyled">
                        <li>Av. Siempreviva 456, CABA</li>
                        <li>Días y horarios de atención: Lun a Vie: de 10 a 17 hs y Sáb: 10 a 13.30 hs.</li>
                        <li>Tel.: +54 1122-3344</li>
                        <li>E-mail: www.elbaulmagico@info.com.ar</li>

                    </ul>
                </div>
            </div>
            <!-- Fin container del footer de la web-->
        </div>
    </footer>

    <script src="./bst/js/bootstrap.bundle.min.js"></script>
    <script src="./bst/js/bootstrap.bundle.min.js.map"></script>

</body>

</html>