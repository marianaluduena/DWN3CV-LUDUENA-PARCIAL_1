<?php

/*
Ésta sección sólo traerá los productos de una determinada categoría que
el usuario eligió, no el catálogo completo de todos los productos de la tienda.
*/

// "rama" será el parámetro que la superglobal tomará de la URL en index.php declarada en los links a las ramas

$ramaElegida = $_GET["rama"] ?? FALSE;

// Creo un nuevo objeto Efecto vacío que se llenará de datos 

$objetoEfecto = new Efecto();

$catalogo = $objetoEfecto->devolverProductoPorRama($ramaElegida);

/* 
Función ucwords convertirá la 1er letra de todos los nombres 
de las ramas de magia a mayúsculas y str__replace reemplazará
todos los __ por un espacio
*/

$tituloRama = ucwords(str_replace("__", " ", $ramaElegida));

// "nivel" será el parámetro que la superglobal tomará de la URL en index.php declarada en los links a los niveles

$nivelElegido = $_GET["nivel"] ?? FALSE;

// Creo un nuevo objeto Efecto vacío que se llenará de datos 

$objetoEfecto = new Efecto();

$catalogoLista = $objetoEfecto->devolverProductosPorNivel($nivelElegido);

$tituloNivel = ucwords($nivelElegido);

?>

<?php if ($ramaElegida) { ?>

    <section class="row">

        <div class="container">
            <h2 class="text-md-center my-3 my-md-5 py-3">Mirá todo nuestro catálogo de: <?= $tituloRama ?></h2>
        </div>

        <!-- Verificar si el array de categoría no está vacío -->

        <?php if (!empty($catalogo)) { ?>
            <?php foreach ($catalogo as $efecto) { ?>

                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="row">

                        <div class="col-12 text-center ">
                            <h3 class="my-3 py-3"><?= $efecto->nombre ?></h3>
                        </div>

                        <div class="col-12 p-3">

                            <div class="card">

                                <img src="./img/productos/<?= $efecto->img ?>" class="card-img-top pastilla__producto" alt="<?= $efecto->nombre ?>">

                                <div class="card-body">
                                    <h3 class="titulo__producto__card"> Descripción</h3>

                                    <p class="card-text text-md-center">
                                        <?= $efecto->resumirDescProd() ?>
                                    </p>

                                    <h3 class="titulo__producto__card">Nivel</h3>

                                    <p class="card-text text-md-center">
                                        <?= $efecto->traerNivelYFormatear() ?>
                                    </p>

                                    <span class="precio">$ <?= $efecto->traerPrecioYFormatear() ?></span>

                                    <a href="index.php?pag=producto&id=<?= $efecto->id ?>" class="card-link btn__comprar">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <?php } ?>

            <!-- Si el array del catálogo está vacío-->
        <?php } else { ?>
            <div class="col-12 text-danger text-center h3">No se encontraron resultados de ésa categoría</div>
        <?php } ?>
    </section>
<?php } else { ?>
    <!-- Mostrar producto por nivel -->
    <section class="row">

        <div class="container">
            <h2 class="text-md-center my-3 my-md-5 py-3">Mirá todos nuestros productos de nivel: <?= $tituloNivel ?></h2>
        </div>

        <!-- Verificar si el array de categoría no está vacío -->

        <?php if (!empty($catalogoLista)) { ?>
            <?php foreach ($catalogoLista as $truco) { ?>

                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="row">

                        <div class="col-12 text-center ">
                            <h3 class="my-3 py-3"><?= $truco->nombre ?></h3>
                        </div>

                        <div class="col-12 p-3">

                            <div class="card">

                                <img src="./img/productos/<?= $truco->img ?>" class="card-img-top pastilla__producto" alt="<?= $truco->nombre ?>">

                                <div class="card-body">
                                    <h3 class="titulo__producto__card"> Descripción</h3>

                                    <p class="card-text text-md-center">
                                        <?= $truco->resumirDescProd() ?>
                                    </p>

                                    <h3 class="titulo__producto__card">Nivel</h3>

                                    <p class="card-text text-md-center">
                                        <?= $truco->traerNivelYFormatear() ?>
                                    </p>

                                    <span class="precio">$ <?= $truco->traerPrecioYFormatear() ?></span>

                                    <a href="index.php?pag=producto&id=<?= $truco->id ?>" class="card-link btn__comprar">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <?php } ?>

            <!-- Si el array del catálogo está vacío-->
        <?php } else { ?>
            <div class="col-12 text-danger text-center h3">No se encontraron resultados de ése nivel</div>
        <?php } ?>
    </section>
<?php } ?>