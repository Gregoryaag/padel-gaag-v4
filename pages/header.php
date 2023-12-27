<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Padel House, tiene los mejores Productos para Jugar al Padel, Palas Zapatos y Paleteros">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo-padel-gaag.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
</head>

<header>
        <div class="container ">

            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-5 col-lg-2 col-xl-3">
                    <a href="../index.php">
                        <img src="/img/logo-padel-gaag.png" alt="Logo de Padel GAAG" width="45%">
                    </a>
                    <button class="btnTema" id="theme-toggle">Cambiar Tema</button>
                </div>
                <div class="col-4 col-lg-7 col-xl-3 d-sm-flex  justify-content-sm-center">
                    <h1>Sport GAAG 🎾</h1>
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
                                    <li class="nav-item "><a class="nav-link letra-azul " href="../index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link letra-azul" href="./alquiler-canchas.php">Alquiler
                                            de
                                            Canchas</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="./productos.php">Productos</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="./nosotros.php">Nosotros</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="./contacto.php">Contacto</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link letra-azul"
                                            href="mostrarCarrito.php">Carrito(<?php echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?>)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>