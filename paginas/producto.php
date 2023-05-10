<?php

// Ésta sección sólo traerá el producto que el usuario eligió.

// La superglobal irá a buscar el id del producto solicitado en el catálogo, sino devolver false

$idProducto = $_GET["id"] ?? FALSE;

$objetoEfecto = new Efecto();

$producto = $objetoEfecto->traerProductoPorId($idProducto);

?>

<section class="row">

    <!-- Verificar si el array de producto no está vacío -->

    <?php if (!empty($producto)) { ?>

        <div class="producto__main__container">

            <div class="img__container__producto__por__id">
                <img class="img-fluid" src="./img/productos/<?= $producto->traerImg() ?>" alt="<?= $producto->traerNombre() ?>" />
            </div>
            <div class="producto__caracteristicas container__texto__fondo">

                <h2 class="text-sm-start text-md-center text-lg-start"><?= $producto->traerNombre() ?></h2>

                <div>
                    <h3 class="titulo__sin__bg text-sm-start text-md-center text-lg-start">Descripción</h3>
                </div>
                <p class="card-text text-md-center">
                    <?= $producto->traerDescripcion() ?>
                </p>

                <div>
                    <h3 id="heading__sin__bg__color">$ <?= $producto->traerPrecioYFormatear() ?></h3>
                </div>

                <div class="btn__precio__producto__individual__container">
                    <div class="cantidad__container">
                        <button type="button" class="btn btn-primary btn-lg d-none d-md-block btn__cantidad">-</button>
                        <h5 class="d-none d-md-block text-center cantidad__numero">0</h5>
                        <button type="button" class="btn btn-primary btn-lg d-none d-md-block btn__cantidad">+</button>
                    </div>
                    <button class="btn btn-primary d-none d-md-block btn__agregar__al__carrito" type="button">🛒 Añadir al carrito</button>
                </div>
            </div>
        </div>


        <!-- Btns sólo para versión móvil-->

        <div class="btn__precio__producto__individual__container">
            <div class="d-grid gap-2 col-6 mx-auto d-md-none">
                <div class="cantidad__container">
                    <button type="button" class="btn btn-primary btn-lg d-md-block btn__cantidad">-</button>
                    <h4 class="text-center cantidad__numero">0</h4>
                    <button class="btn btn-primary btn-lg d-md-block btn__cantidad">+</button>
                </div>
                <button class="btn btn-primary btn__agregar__al__carrito" type="button">🛒 Añadir al carrito</button>
            </div>

            <!-- Fin btns para versión móvil-->
        </div>
        </div>

        </div>

        <!-- Si el array del catálogo está vacío-->
    <?php } else { ?>
        <div class="col-12 text-danger text-center h3">No encontramos el producto buscado</div>
    <?php } ?>
</section>