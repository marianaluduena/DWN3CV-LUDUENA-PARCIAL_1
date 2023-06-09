<?php

?>


<section class="row">
    <div class="container py-3">
        <h2 class="titulo__especial my-4 text-md-center py-3">Contacto</h2>

        <p class="text-center">
            Nuestra mayor <strong> prioridad </strong> son nuestros clientes, por eso escucharlos es muy importante para nosotros. ¿Tenés dudas? ¿Tuviste algún inconveniente con
            algún producto? ¿Necesitás ayuda con una compra? ¿Tenés un reclamo? Escribinos y nos estaremos comunicando con vos a la brevedad.
        </p>

        <div class="row justify-content-center">



            <!-- FORM DE PRUEBA -->

            <div class="row g-4 p-2">

                <div class="col-md-8 m-md-auto m-lg-0 col-lg-5">
                    <div class="container">
                        <img src="./img/contacto/cofre__magico.jpg" alt="Cofre mágico abriéndose" class="img-fluid card-img-top" />
                        <div class="card-body card card__fondo__transparente">
                            <blockquote class="blockquote mb-0">
                                <p class="card-text text-center">"Las palabras son, en mi no tan humilde opinión, nuestra fuente más inagotable de <strong>magia</strong>."</p>
                                <footer class="blockquote-footer text-end"> Albus Dumbledore</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>


                <!-- Form -->

                <div class="col-md-12 col-lg-6 form__contacto m-auto">
                    <div class="p-3">
                        <h3>Estemos en contacto</h3>
                    </div>

                    <div class="p-3 p-md-8">
                        <form class="row g-3 form justify-content-center" method="POST" action="ultraSecreto/enviar__datos.php">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label datos">Nombre *</label>
                                <input type="text" class="form-control my-1 input__form" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Ingresá tu nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label datos">Apellido *</label>
                                <input type="text" class="form-control my-1 input__form" id="apellido" name="apellido" aria-describedby="apellido" placeholder="Ingresá tu apellido" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label datos">Email *</label>
                                <input type="email" class="form-control my-1 input__form" id="email" name="email" aria-describedby="email" placeholder="Ingresá tu email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nroTel" class="form-label datos">Teléfono *</label>
                                <input type="number" class="form-control my-1 input__form" id="nroTel" name="nroTel" aria-describedby="nroTel" placeholder="Número de teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="anio__nacimiento" class="form-label datos">Año de nacimiento</label>
                                <select class="form-select my-1 input__form" id="anio__nacimiento" name="anio__nacimiento" required>
                                    <option value=""> Año de nacimiento: * </option>

                                    <!--Año de nacimiento generado en forma dinámica con PHP -->

                                    <?php for ($i = 1965; $i <= 2018; $i++) { ?>

                                        <option> <?= $i ?></option>

                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="magiaFav" class="form-label datos">¿Cuál es tu magia favorita?</label>
                                <select class="form-select my-1 input__form" name="magiaFav" id="magiaFav">

                                    <option value="1">Manipulación</option>
                                    <option value="2">Escapismo</option>
                                    <option value="3">Cartomagia</option>
                                    <option value="4">Magia de escenario</option>
                                    <option value="5">Mentalismo</option>
                                </select>
                            </div>

                            <div class="col-md-12 text-center">
                                <label for="comentarios" class="form-label text-center datos">Dudas, comentarios... quejas! </label>
                                <div class="container__form__textarea d-flex justify-content-center my-1">
                                    <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Escribí aquí tu consulta o comentario *" rows="3" required></textarea>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary form__btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Fin div class row g-4 py-5 -->
            </div>

            <!-- Fin div class container py-2 -->
        </div>
    </div>
</section>