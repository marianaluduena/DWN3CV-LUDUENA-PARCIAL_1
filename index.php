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
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?pag=productos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?pag=productos&rama=todos">Todos</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&rama=cartomagia">Cartomagia</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&rama=manipulacion">Manipulación</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&rama=mentalismo">Mentalismo</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&rama=magia__de__escenario">Escenario</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&rama=escapismo">Escapismo</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?pag=productos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nivel
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?pag=productos&nivel=todos">Todos</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&nivel=facil">Fácil</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&nivel=intermedio">Intemedio</a></li>
                                <li><a class="dropdown-item" href="index.php?pag=productos&nivel=dificil">Difícil</a></li>
                            </ul>
                        </li>
                    </ul>

                   
                    <a class="nav-link active" href="index.php?pag=truco">¡Probá éste truco!</a>
                    <a class="nav-link active" href="index.php?pag=contacto">Contacto</a>
                    <a class="nav-link active" href="index.php?pag=acerca">Acerca</a>
                </div>
            </div>
        </div>
    </nav>



    <main class="container">

        <header class="container d-flex justify-content-center">
            <h1 class="text-warning text-center d-none d-md-block">El baúl mágico</h1>
        </header>

        <?php

        // Función que verifica que un archivo existe

        require_once file_exists("paginas/$entrada.php") ? "paginas/$entrada.php" : "paginas/404.php";


        ?>
    </main>


    <footer class="pt-5 pb-4 text-md-left container footer__empresa">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 mx-auto mt-3">
                    <h3 class="md-4 font-weight-bold">El baúl mágico</h3>
                    <hr />
                    <ul class="list-unstyled">
                        <li>🏠 Av. Siempreviva 456, CABA</li>
                        <li>⏲️ Días y horarios de atención: Lun a Vie: de 10 a 17 hs y Sáb: 10 a 13.30 hs.</li>
                    </ul>
                </div>

                <div class="col-md-2 col-lg-2 mx-auto mt-3">
                    <h3 class="md-4 font-weight-bold">Productos</h3>
                    <hr />

                    <a href="index.php?pag=productos&rama=todos" class="d-block footer__links__secciones">
                        Todos
                    </a>

                    <a href="index.php?pag=productos&rama=cartomagia" class="d-block footer__links__secciones">
                        Cartomagia
                    </a>
                    <a href="index.php?pag=productos&rama=manipulacion" class="d-block footer__links__secciones">
                        Manipulación
                    </a>
                    <a href="index.php?pag=productos&rama=mentalismo" class="d-block footer__links__secciones">
                        Mentalismo
                    </a>
                    <a href="index.php?pag=productos&rama=magia__de__escenario" class="d-block footer__links__secciones">
                        Magia de escenario
                    </a>
                    <a href="index.php?pag=productos&rama=escapismo" class="d-block footer__links__secciones">
                        Escapismo
                    </a>

                </div>

                <div class="col-md-2 col-lg-2 mx-auto mt-3">
                    <h3 class="md-4 font-weight-bold">Nosotros</h3>
                    <hr />

                    <a href="index.php?pag=home" class="d-block footer__links__secciones">
                        Home
                    </a>
                    <a href="index.php?pag=nosotros" class="d-block footer__links__secciones">
                        Historia
                    </a>
                    <a href="index.php?pag=ramas" class="d-block footer__links__secciones">
                        Ramas de la Magia
                    </a>
                    <a href="index.php?pag=productos&rama=todos" class="d-block footer__links__secciones">
                        Productos
                    </a>
                    <a href="index.php?pag=truco" class="d-block footer__links__secciones">
                        ¡Probá éste truco!
                    </a>
                    <a href="index.php?pag=contacto" class="d-block footer__links__secciones">
                        Contacto
                    </a>
                    <a href="index.php?pag=acerca" class="d-block footer__links__secciones">
                        Acerca de
                    </a>

                </div>

                <div class="col-md-3 col-lg-3 mx-auto mt-3">
                    <h3 class="md-4 font-weight-bold">Contacto</h3>
                    <hr />
                    <ul class="list-unstyled">
                        <li>📞 Tel.: +54 1122-3344</li>
                        <li>📧 E-mail: www.elbaulmagico@info.com.ar</li>
                    </ul>
                </div>

                <hr class="mb-4" />
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p class="text-center">
                            Copyright 2023 Mariana Ludueña
                        </p>
                    </div>


                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <div class="container">
                                        <a href="https://www.instagram.com" target="_blank" class="btn-floating btn-sm text-white">
                                            <img src="./img/redes__soc/instagram.png" alt="Logo de Instagram" class="img-fluid logo__redes__soc" />
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="container">
                                        <a href="https://twitter.com/" target="_blank" class="btn-floating btn-sm text-white">
                                            <img src="./img/redes__soc/twitter.png" alt="Logo de Twitter" class="img-fluid logo__redes__soc" />
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="container">
                                        <a href="https://es-la.facebook.com/" target="_blank" class="btn-floating btn-sm text-white">
                                            <img src="./img/redes__soc/facebook.png" alt="Logo de Facebook" class="img-fluid logo__redes__soc" />
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="container">
                                        <a href="https://www.youtube.com" target="blank" class="btn-floating btn-sm text-white">
                                            <img src="./img/redes__soc/youtube.png" alt="Logo de Youtube" class="img-fluid logo__redes__soc" />
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="./bst/js/bootstrap.bundle.min.js"></script>
    <script src="./bst/js/bootstrap.bundle.min.js.map"></script>

</body>

</html>