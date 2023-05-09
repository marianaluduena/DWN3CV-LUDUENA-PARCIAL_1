<?php

?>

<section>
    <div class="container py-3">
        <!-- CÓDIGO ORIGINAL NO BORRAR POR AHORA

    <div class="container-fluid contacto__container">

        <h2 id="contacto" class="my-4 my-md-5 text-md-center py-3">Contacto</h2>

        <form method="post" class="row">

            <div class="col-12 col-md-6 mb-3">
                <div class="mb-3">
                    <label for="nombre" class="form-label datos">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Ingresá tu nombre" required>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="mb-3">
                    <label for="apellido" class="form-label datos">Apellido</label>
                    <input type="text" class="form-control" id="apellido" aria-describedby="apellido" placeholder="Ingresá tu apellido" required>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label datos">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Ingresá tu email" required>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label datos">Teléfono</label>
                    <input type="number" class="form-control" id="telefono" aria-describedby="telefono" placeholder="Número de teléfono" required>
                </div>
            </div>

            <div id="opciones">
                <div class="col-12 col-md-6 mb-3">
                    <label for="magiaFav" class="form-label datos">Tipo de magia</label>
                    <select class="form-select" name="magiaFav" id="magiaFav">
                        <option value="1">Close up</option>
                        <option value="2">Escapismo</option>
                        <option value="3">Manipulación</option>
                        <option value="4">Magia de escenario</option>
                    </select>
                </div>
            </div>

            <label for="comentarios" class="form-label"> </label>

            <div class="container__form__textarea">
                <textarea id="comentarios" name="comentarios" placeholder="Escribí aquí tu consulta o comentario" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary form__btn">Enviar</button>
        </form>
    </div> -->


        <h2 class="my-4 text-md-center py-3">Contacto</h2>

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <form class="row g-3 form justify-content-center" method="POST" action="ultraSecreto/enviar__datos.php">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre *</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Ingresá tu nombre" required>
                    </div>
                    <div class="col-md-6">
                        <label for="apellido" class="form-label">Apellido *</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="apellido" placeholder="Ingresá tu apellido" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Ingresá tu email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nroTel" class="form-label">Teléfono *</label>
                        <input type="number" class="form-control" id="nroTel" name="nroTel" aria-describedby="telefono" placeholder="Número de teléfono" required>
                    </div>
                    <div class="col-md-6">
                        <label for="direccion" class="form-label">Dirección *</label>
                        <input type="direccion" class="form-control" id="direccion" name="direccion" aria-describedby="direccion" placeholder="Dirección" required>
                    </div>
                    <div class="col-md-6">
                        <label for="provincia" class="form-label">Provincia *</label>
                        <input type="provincia" class="form-control" id="provincia" name="provincia" aria-describedby="provincia" placeholder="Provincia" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Año de nacimiento</label>
                        <select class="form-select" id="anio__nacimiento" name="anio__nacimiento" required>
                            <option value=""> Año de nacimiento: * </option>

                            <!--Año de nacimiento generado en forma dinámica con PHP -->

                            <?php for ($i = 1965; $i <= 2018; $i++) { ?>

                                <option> <?= $i ?></option>

                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="magiaFav" class="form-label">¿Cuál es tu rama de magia favorita?</label>
                        <select class="form-select" name="magiaFav" id="magiaFav">

                            <option value="1">Manipulación</option>
                            <option value="2">Escapismo</option>
                            <option value="3">Cartomagia</option>
                            <option value="4">Magia de escenario</option>
                            <option value="5">Mentalismo</option>
                        </select>
                    </div>

                    <label for="comentarios" class="form-label"> </label>

                    <div class="container__form__textarea d-flex justify-content-center">
                        <textarea id="comentarios" name="comentarios" placeholder="Escribí aquí tu consulta o comentario *" rows="3" required></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary form__btn">Enviar</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>