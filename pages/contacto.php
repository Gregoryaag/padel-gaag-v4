<?php

require_once 'header.php';

?>

<head>
<title>Contacto</title>
</head>

    <main>
        <section class="section container">
            <div class="row px-2 px-md-5">
                <div class="col-12">
                    <h2>Contactanos</h2>
                </div>
                <form action="enviarFormulario.php" method="POST" class=" shadow-lg" data-aos="fade-up">
                    <div class="mb-3 col-12">
                        <label class="form-label" for="nombre"><span class="text-contacto">Nombre:</span></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" required>
                    </div>

                    <div class="mb-3 col-12">
                        <label class="form-label" for="telefono"><span class="text-contacto" >Teléfono:</span></label>
                        <input class="form-control" type="number" name="telefono" id="telefono" required>
                    </div>

                    <div class="mb-3 col-12">
                        <label class="form-label" for="correo"><span class="text-contacto" >Correo:</span></label>
                        <input class="form-control" type="correo" name="correo" id="correo">
                    </div>

                    <div class="mb-3 col-12">
                        <label class="form-label" for="informacion"><span class="text-contacto" >Información:</span></label>
                        <textarea class="form-control" name="informacion" id="informacion" cols="30" rows="10"></textarea>
                    </div>
                    <div class="md-3 col-12 d-flex justify-content-end">
                        <button type="submit" class="botonContacto">Enviar</button>
                        <!-- <input type="submit" value="Enviar"> -->
                    </div>
                </form>
            </div>
        </section>

    </main>
    <?php
    require_once 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>