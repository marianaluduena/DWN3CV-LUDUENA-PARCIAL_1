<?php

$objetoEfecto = new Efecto();
$catalogo = $objetoEfecto->mostrarLosMasVendidos();
?>

<!-- Carrousel-->

<div id="carouselExampleFade" class="carousel slide carousel-fade d-none d-md-block" data-bs-ride="carousel">

    <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="100">
                <img src="./img/carrousel/cartas__ps__4.jpg" class="d-block w-100 img-fluid img__carrousel" alt="Carta de póker flotando">
                <div class="carousel-caption d-none d-md-block">
                    <p class="box b1 animUno parrafo__carrousel">
                        Hacé posible lo imposible
                    </p>
                </div>
            </div>

            <div class="carousel-item" data-interval="200">
                <img src="./img/carrousel/esposas__ps__2.jpg" class="d-block w-100 img-fluid img__carrousel" alt="Esposas de escapismo">
                <div class="carousel-caption d-none d-md-block">
                    <p class="box b1 animUno parrafo__carrousel">
                        Escapate
                    </p>
                </div>
            </div>

            <div class="carousel-item" data-interval="200">
                <img src="./img/carrousel/fuego.jpg" class="d-block w-100 img-fluid img__carrousel" alt="Magia con fuego">
                <div class="carousel-caption d-none d-md-block">
                    <p class="box b1 animUno parrafo__carrousel">
                        Asombrá
                    </p>
                </div>
            </div>

            <div class="carousel-item" data-interval="200">
                <img src="./img/carrousel/panuelo.jpg" class="d-block w-100 img-fluid img__carrousel" alt="Pañuelo atravesando teléfono celular">
                <div class="carousel-caption d-none d-md-block">
                    <p class="box b1 animUno parrafo__carrousel">
                        Uní la magia y la tecnología
                    </p>
                </div>
            </div>

            <div class="carousel-item" data-interval="1000">
                <img src="./img/carrousel/sogas__ps.jpg" class="d-block w-100 img-fluid img__carrousel" alt="Manos sosteniendo una cuerda">
                <div class="carousel-caption d-none d-md-block">

                    <p class="box b1 animUno parrafo__carrousel">
                        Conocé más
                    </p>
                    <!-- Link a los productos -->
                    <a href="index.php?pag=productos&rama=todos"><button class="btn btn-primary form__btn">Ver productos</button></a>
                </div>
            </div>

            <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
</div>

<!-- Llenar sección con un resumen de toda la web, banners, links a los productos, etc -->

<section class="row p-slider">

    <!-- Slider de productos más vendidos -->

    <div>
        <h3 class="text-center py-3 my-2 h3__especial">Lo más vendidos</h3>
    </div>

    <?php foreach ($catalogo as $producto) { ?>

        <div class="card-group productos__mas__vendidos__slider">
            <div class="card">
                <img class="img-fluid" src="./img/productos/<?= $producto->img ?>" alt="<?= $producto->nombre ?>" />
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $producto->nombre ?></h5>
                    <p class="card-text"><?= $producto->resumirDescProd() ?></p>
                    <button class="btn btn-primary btn__small d-flex m-auto">Ver más</button>
                </div>
            </div>
        </div>
    <?php } ?>

</section>