<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Padel House, tu lugar para jugar al padel y adquirir tus palas y zapatos de Padel">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Inicio</title>
</head>

<body>
    <header>
        <div class="container ">

            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-5 col-lg-2 col-xl-3">
                    <a href="index.php">
                        <img src="/img/logo-padel.png" alt="Logo de Padel GAAG" width="45%">
                    </a>
                </div>
                <div class="col-4 col-lg-7 col-xl-3 d-sm-flex justify-content-sm-center">
                    <h1>PADEL GAAG</h1>
                </div>

                <div class="col-3 col-lg-3 col-xl-6">
                    <nav class="menu">
                        <div class="navbar navbar-expand-xl ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-lg-0 ">
                                    <li class="nav-item "><a class="nav-link letra-azul " href="./index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link letra-azul" href="./pages/alquiler-canchas.php">Alquiler
                                            de
                                            Canchas</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="./pages/productos.php">Productos</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="./pages/nosotros.php">Nosotros</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="./pages/contacto.php">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section">
            <div class="container">
                <article class="row d-flex justify-content-center align-items-center  text-center">
                    <div class="col-12 text-md-start">
                        <h2>Alquiler de Canchas</h2>
                    </div>
                    <div class="row d-md-flex justify-content-between">
                        <div class="col-12 col-md-4 d-md-flex justify-content-md-start px-5 px-md-0">
                            <img class="w-100" src="./img/cancha1.png" alt="cancha de padel">
                        </div>
                        <div class="col-12 col-md-8 d-md-flex align-items-center">
                            <p>
                                Alquila tu cancha para Jugar al Padel desde las 7:00 am hasta las 11:00 pm todos los
                                dias
                                del Año
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>


        <section class="section">
            <div class="container">
                <article class="row d-flex justify-content-center align-items-center  text-center">
                    <div class="col-12 text-md-start">
                        <h2>Productos</h2>
                    </div>
                    <div class="row d-md-flex justify-content-between">
                        <div class="col-12 col-md-4 d-md-flex justify-content-md-start px-5 px-md-0">
                            <img class="w-100" src="./img/tienda.png" alt="foto tienda de articulos de padel">
                        </div>
                        <div class="col-12 col-md-8 d-md-flex align-items-center">
                            <p>
                                Adquiere nuestros productos de Padel en nuestra Tienda tenemos las mejores palas,
                                Zapatos y paleteros, con los mejores precios del Mercado
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <article class="row d-flex justify-content-center align-items-center  text-center">
                    <div class="col-12 text-md-start">
                        <h2>Nosotros</h2>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-12 col-md-4 d-md-flex justify-content-md-start px-5 px-md-0">
                            <img class="w-100" src="./img/canchas_index.png"
                                alt="foto del lugar de las canchas de padel">
                        </div>
                        <div class="col-12 col-md-8 d-md-flex align-items-center">
                            <p>
                                ¡Vive la emoción del pádel en nuestras pistas de alquiler! Nuestras instalaciones de
                                alta calidad están diseñadas tanto para jugadores experimentados como para
                                principiantes.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

    </main>

    <?php
    require_once 'pages/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>