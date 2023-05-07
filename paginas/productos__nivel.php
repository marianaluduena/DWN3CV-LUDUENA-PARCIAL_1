<?php

/*
Ésta sección sólo traerá los productos de un determinado nivel que
el usuario eligió, no el catálogo completo de todos los productos de la tienda.
*/

// "nivel" será el parámetro que la superglobal tomará de la URL en index.php declarada en los links a los niveles

$nivelElegido = $_GET["nivel"] ?? FALSE;

// Creo un nuevo objeto Efecto vacío que se llenará de datos 

$objetoEfectoNivel = new Efecto();

$catalogo = $objetoEfectoNivel->devolverProductosPorNivel($nivelElegido);

$titulo = ucwords($nivelElegido);

?>

<section class="row">

    <div class="container">
        <h2 class="text-md-center my-3 my-md-5 py-3">Mirá todos nuestros productos de nivel: <?= $titulo ?></h2>
    </div>

    <!-- Verificar si el array de categoría no está vacío -->

    <?php if (!empty($catalogo)) { ?>
        <?php foreach ($catalogo as $truco) { ?>

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