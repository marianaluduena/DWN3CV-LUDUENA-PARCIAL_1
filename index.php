<?php

require_once "libraries/funciones.php";

// Defino cuáles serán las páginas/secciones válidas del sitio web

$pagsValidas = [
    "home" => [
        "titulo" => "Inicio",
    ],
    "ramas" => [
        "titulo" => "Ramas de la magia",
    ],
    "productos" => [
        "titulo" => "Productos",
    ],
    "beneficios" => [
        "titulo" => "¿Por qué aprender magia?",
    ],
    "truco" => [
        "titulo" => "Probá éste truco",
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ]
];

/* Creo un array con la superglobal GET en la var parametrosMiWeb
para ir guardando los nombres de las secciones/páginas del sitio
al las que el usuario será dirigido
*/
$parametrosMiWeb = $_GET;

/*
echo "<pre>";
print_r($parametrosMiWeb);
echo "</pre>";
*/

/*superglobal para sólo traer la parte de la web que el usuario pida
$pagina = $_GET["pag"];
*/

// Si el usuario no envía ningún nombre de mi sitio, enviarlo al home

//$pagina = isset($_GET["pag"]) ? $pagina = $_GET["pag"] : "home";

$pagina = $_GET["pag"] ?? "home";

// Si el usurio eligió un tipo de magia



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

    <!-- Menú de navegación -->

    <!-- Código nav original-->
    <nav class="navbar navbar-expand-md">
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
                    <a class="nav-link active" href="index.php?pag=ramas">Tipos de magia</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?pag=productos&rama=cartomagia">Cartomagia</a></li>
                            <li><a class="dropdown-item" href="index.php?pag=productos&rama=manipulacion">Manipulación</a></li>
                            <li><a class="dropdown-item" href="index.php?pag=productos&rama=magia__de__escenario">Escenario</a></li>
                            <li><a class="dropdown-item" href="index.php?pag=productos&rama=escapismo">Escapismo</a></li>
                        </ul>
                    </li>
                    <a class="nav-link active" href="index.php?pag=beneficios">¿Por qué aprender magia?</a>
                    <a class="nav-link active" href="index.php?pag=truco">¡Probá éste truco!</a>
                    <a class="nav-link active" href="index.php?pag=contacto">Contacto</a>
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

                        <a href="#productos">
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

        <h2 class="my-3 my-md-5 text-md-center py-3 px-2">Acerca de mí</h2>
        <div class="row g-0 row__footer">

            <div class="col-md-5 m-md-auto col-lg-4 my-3">

                <img src="./img/perfil__ml/mariana__luduena.jpg" class="img-fluid rounded-start" alt="Mariana Ludueña">
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="card-body skills__cards my-3">

                    <h3 class="my-md-4 subtitle card-subtitle mb-2 d-none d-lg-block">Mis datos</h3>

                    <div class="card-group">
                        <div class="card skills__card mx-1">

                            <div class="skills__img__container px-2">
                                <img src="./img/varios/skills.png" class="card-img-top" alt="Icono de una computadora">
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">Skills</h4>
                                <ul class="skills__lista">
                                    <li><strong>HTML5</strong></li>
                                    <li><strong>Css</strong></li>
                                    <li><strong>Javascript</strong></li>
                                    <li><strong>Git</strong></li>
                                    <li><strong>SEO</strong></li>
                                </ul>

                            </div>
                        </div>

                        <div class="card skills__card mx-1">

                            <div class="skills__img__container px-2">
                                <img src="./img/varios/idiomas.png" class="card-img-top" alt="Banderas inglesa, española y alemana">
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">Idiomas</h4>
                                <ul class="skills__lista">
                                    <li><strong>Español</strong>: nativo</li>
                                    <li><strong>Inglés</strong>: B2</li>
                                    <li><strong>Alemán</strong>: B1</li>
                                </ul>

                            </div>
                        </div>

                        <div class="card skills__card mx-1">

                            <div class="skills__img__container px-2">
                                <img src="..." class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">Portfolio</h4>
                                <ul class="skills__lista">
                                    <a href="https://marianaluduena.github.io/coder__house__repo/" target="_blank">
                                        <li><strong>Viandas Gaia</strong>: 2022</li>
                                    </a>
                                    <li><strong>Inglés</strong>: B2</li>
                                    <li><strong>Alemán</strong>: B1</li>
                                </ul>

                            </div>
                        </div>

                        <div class="card skills__card mx-1">

                            <div class="skills__img__container px-2">
                                <img src="..." class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">Mis redes</h4>
                                <ul class="skills__lista">
                                    <a class="link__btn__redes" href="https://github.com/marianaluduena?tab=repositories" target="_blank"><button class="btn btn-primary" role="button"><strong>GitHub</strong></button></a>
                                    <a class="link__btn__redes" href="https://www.linkedin.com/in/mariana-ludue%C3%B1a-41839698" target="_blank"><button class="btn btn-primary" role="button"><strong>LinkedIn</strong></button></a>
                                </ul>
                            </div>
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