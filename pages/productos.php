<?php

require_once '../modelo/config.php';
require_once '../modelo/conexion.php';
require_once 'carrito.php';
require_once 'header.php';

?>

<head>
    <title>Productos</title>
</head>

<body>

    <?php if ($mensaje != "") { ?>
        <div class="alert alert-success">
            <?php echo $mensaje; ?>
            <a href="mostrarCarrito.php" class="badge bg-success">Ver Carrito</a>
        </div>
    <?php } ?>
    <main>
        <section class="section section-productos container">
            <div class="row d-flex-column p-5">
                <div class="col-12 p-0">
                    <h2>Palas</h2>
                </div>
                <div class="row col-12  justify-content-lg-between justify-content-center caja-articulo">

                    <?php
                    $sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE `tipo` = 'pala'");
                    $sentencia->execute();
                    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    //print_r($listaProductos);
                    ?>
                    <?php
                    foreach ($listaProductos as $producto) { ?>

                        <article class="  card col-4 col-lg-2 article_productos">
                            <img class="card-img-top" src="<?php echo $producto['imagen']; ?>"
                                alt="foto pala marca Bullpadel Gold 3.0 modelo forma lagrima hibrida">
                            <div class="card-body ">
                                <h3 class="card-title">
                                    <?php echo $producto['nombre']; ?>
                                </h3>
                                <span class="card-text">$
                                    <?php echo $producto['precio']; ?>
                                </span>
                                <form action="" method="post">

                                    <input type="hidden" name="id" id="id"
                                        value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                                    <input type="hidden" name="nombre" id="nombre"
                                        value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
                                    <input type="hidden" name="precio" id="precio"
                                        value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
                                    <input type="hidden" name="cantidad" id="cantidad"
                                        value="<?php echo openssl_encrypt(1, COD, KEY); ?>">

                                    <button class="boton" name="btnAccion" value="agregar" type="submit"><span
                                            class="addCarrito">Agregar al
                                            Carrito</span></button>
                                </form>
                            </div>
                        </article>

                    <?php } ?>

                </div>
            </div>
        </section>
        <section class="section section-productos container">
            <div class="row d-flex-column p-5 ">
                <div class="col-12 p-0">
                    <h2>Zapatos</h2>
                </div>
                <div class=" row col-12 d-flex justify-content-lg-between justify-content-center  caja-articulo">

                    <?php
                    $sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE `tipo` = 'zapato'");
                    $sentencia->execute();
                    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    //print_r($listaProductos);
                    ?>
                    <?php
                    foreach ($listaProductos as $producto) { ?>

                        <article class=" card col-4 col-lg-2 article_productos">
                            <img class="card-img-top" src="<?php echo $producto['imagen']; ?>"
                                alt="foto de Zapatos de padel marca Bullpadel Elite 23I Verde Mujer">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <?php echo $producto['nombre']; ?>
                                </h3>
                                <span class="card-text">$
                                    <?php echo $producto['precio']; ?>
                                </span>
                                <form action="" method="post">

                                    <input type="hidden" name="id" id="id"
                                        value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                                    <input type="hidden" name="nombre" id="nombre"
                                        value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
                                    <input type="hidden" name="precio" id="precio"
                                        value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
                                    <input type="hidden" name="cantidad" id="cantidad"
                                        value="<?php echo openssl_encrypt(1, COD, KEY); ?>">

                                    <button class="boton" name="btnAccion" value="agregar" type="submit"><span
                                            class="addCarrito">Agregar al
                                            Carrito</span></button>
                                </form>
                            </div>
                        </article>
                    <?php } ?>

                </div>
            </div>
        </section>

        <section class="section section-productos container">
            <div class="row d-flex-column p-5 ">
                <div class="col-12 p-0">
                    <h2>Paleteros</h2>
                </div>
                <div class=" row col-12 d-flex justify-content-lg-between justify-content-center  caja-articulo">
                    <?php
                    $sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE `tipo` = 'paletero'");
                    $sentencia->execute();
                    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    //print_r($listaProductos);
                    ?>
                    <?php
                    foreach ($listaProductos as $producto) { ?>
                        <article class=" card col-4 col-lg-2 article_productos">

                            <img class="card-img-top" src="<?php echo $producto['imagen']; ?>"
                                alt="foto de Paleteros de padel Marca Dunlop Tour Intro LTD Negro">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <?php echo $producto['nombre']; ?>
                                </h3>
                                <span class="card-text">$
                                    <?php echo $producto['precio']; ?>
                                </span>
                                <form action="" method="post">

                                    <input type="hidden" name="id" id="id"
                                        value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                                    <input type="hidden" name="nombre" id="nombre"
                                        value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
                                    <input type="hidden" name="precio" id="precio"
                                        value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
                                    <input type="hidden" name="cantidad" id="cantidad"
                                        value="<?php echo openssl_encrypt(1, COD, KEY); ?>">

                                    <button class="boton" name="btnAccion" value="agregar" type="submit"><span
                                            class="addCarrito">Agregar al
                                            Carrito</span></button>
                                </form>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </section>

    </main>

    <?php
    require_once 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        //Tema blanco y negro
        const body = document.body;
        const themeToggle = document.getElementById('theme-toggle');
        let isDarkTheme = false;

        themeToggle.addEventListener('click', () => {
            isDarkTheme = !isDarkTheme;
            if (isDarkTheme) {
                body.classList.remove('light-theme');
                body.classList.add('dark-theme');
            } else {
                body.classList.remove('dark-theme');
                body.classList.add('light-theme');
            }
        });
    </script>
</body>

</html>