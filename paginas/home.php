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
                    <a href="index.php?pag=productos&rama=todos"><span class="btn btn-primary form__btn">Ver productos</span></a>
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


<section class="row p-slider justify-content-center">

    <!-- Productos más vendidos -->

    <div>
        <h2 class="titulo__especial text-center py-3 my-2 h3__especial">Lo más vendidos</h2>
    </div>

    <div class="galeria__mas__vendidos d-block d-md-flex flex-wrap">
        <?php foreach ($catalogo as $producto) { ?>
            <div class="content">
                <img class="img-fluid" src="./img/productos/<?= $producto->traerImg() ?>" alt="<?= $producto->traerNombre() ?>" />
                <div class="card-body body__mas__vendidos py-3">
                    <h4 class="card-title text-center px-3 py-2"><?= $producto->traerNombre() ?></h4>
                    <p class="card-text"><?= $producto->resumirDescProd() ?></p>
                    <a href="index.php?pag=producto&id=<?= $producto->traerId() ?>"><span class="btn btn-primary btn__comprar ">Ver más</span></a>
                </div>
            </div>
        <?php } ?>
    </div>

    <h3 class="titulo__especial text-center py-3 my-2 h3__especial">Visitanos</h3>

    <div class="d-block d-lg-flex container m-md-3 p-3">
        <div class="card mb-3 col-md-10 m-md-auto m-lg-0 col-lg-6">
            <img src="./img/varios/tienda__magia.jpg" class="card-img-top img-fluid" alt="Tienda de magia">
            <div class="card-body">
                <h4 class="card-title">Nuestra tienda</h4>
                <p class="card-text">Ubicados en la hermosa zona de Palermo, CABA, somos una de las más grandes <strong> tiendas de magia profesional</strong>
                    que existen. ¡Mirá todo lo que tenemos para vos esperándote!</p>
                <a href="index.php?pag=productos&rama=todos"><span class="btn btn-primary btn__comprar btn__ver__mas">Ver más</span></a>
            </div>
        </div>

        <div class="mapa d-block d-md-flex m-none m-lg-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d580.6943541188234!2d-58.4219526266474!3d-34.581312656600566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5837660ebb7%3A0xd80f6e5d08a2d8ba!2sThames%202483%2C%20C1425FII%20CABA!5e0!3m2!1ses!2sar!4v1683629673506!5m2!1ses!2sar" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</section>