<?php

/*
Ésta sección sólo traerá los productos de una determinada categoría que
el usuario eligió, no el catálogo completo de todos los productos de la tienda.
*/

require_once "libraries/misProductos.php";

// "rama" será el parámetro que la superglobal tomará de la URL en index.php declarada en los links a las categorías
$categoriaElegida = $_GET["rama"] ?? FALSE;

$catalogo = devolverProductoPorCat($categoriaElegida);

/* 
Función ucwords convertirá la 1er letra de todos los nombres 
de las ramas de magia a mayúsculas
*/

$titulo = ucwords(str_replace("__", " ", $categoriaElegida));

?>

<section class="row">

    <div class="container">
        <h2 class="text-md-center my-3 my-md-5 py-3">Mirá todo nuestro catálogo de: <?= $titulo ?></h2>
    </div>

    <!-- Verificar si el array de categoría no está vacío -->

    <?php if (!empty($catalogo)) { ?>
        <?php foreach ($catalogo as $efecto)
        /* echo "<pre>";
        print_r($efecto);
        echo "</pre>";*/ { ?>

            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="row">

                    <div class="col-12 text-center ">
                        <h3 class="my-3 py-3"><?= $efecto["nombre"] ?></h3>
                    </div>

                    <div class="col-12 p-3">

                        <div class="card">

                            <img src="./img/productos/<?= $efecto["img"] ?>" class="card-img-top pastilla__producto" alt="<?= $efecto["nombre"] ?>">

                            <div class="card-body">
                                <h3 class="titulo__producto__card"> Descripción</h3>

                                <p class="card-text text-md-center">
                                    <?= resumirDescProd($efecto["descripcion"], 30) ?>
                                </p>

                                <h3 class="titulo__producto__card">Nivel</h3>

                                <p class="card-text text-md-center">
                                    <?= $efecto["nivel"] ?>
                                </p>

                                <span class="precio">$ <?= number_format($efecto["precio"], 2, ",", ".") ?></span>

                                <a href="index.php?pag=producto&id=<?=$efecto["id"] ?>" class="card-link btn__comprar">Ver más</a>
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