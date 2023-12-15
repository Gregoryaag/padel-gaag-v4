<?php
session_start();

$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'agregar':

            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {

                $id = openssl_decrypt($_POST['id'], COD, KEY);

                $mensaje .= "Ok ID correcto " . $id . "<br/>";

            } else {

                $mensaje .= "Upss... ID incorrecto " . $id . "<br/>";
            }

            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $nombre = openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje .= "Ok Nombre " . $nombre . "<br/>";
            } else {
                $mensaje .= "Upss... Algo pasa con el nombre" . "<br/>";
                break;
            }

            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $cantidad = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= "Ok Cantidad " . $cantidad . "<br/>";
            } else {
                $mensaje .= "Upss... Algo pasa con la cantidad" . "<br/>";
                break;
            }

            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $precio = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= "Ok Precio " . $precio . "<br/>";
            } else {
                $mensaje .= "Upss... Algo pasa con el precio" . "<br/>";
                break;
            }

            if (!isset($_SESSION['carrito'])) {
                $producto = array(
                    'id' => $id,
                    'nombre' => $nombre,
                    'cantidad' => $cantidad,
                    'precio' => $precio
                );

                $_SESSION['carrito'][0] = $producto;
                $mensaje = "Producto agregado al Carrito";

            } else {
                $idProductos = array_column($_SESSION['carrito'], "id");
                if (in_array($id, $idProductos)) {
                    echo "<script>alert('El Producto ya ha sido agregado');</script>";
                    $mensaje = "";
                } else {
                    $numeroProductos = count($_SESSION['carrito']);

                    $producto = array(
                        'id' => $id,
                        'nombre' => $nombre,
                        'cantidad' => $cantidad,
                        'precio' => $precio
                    );
                    $_SESSION['carrito'][$numeroProductos] = $producto;
                    $mensaje = "Producto agregado al Carrito";
                }
            }

            //$mensaje = print_r($_SESSION, true);

            break;
        case "eliminar":
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {

                $id = openssl_decrypt($_POST['id'], COD, KEY);

                foreach ($_SESSION['carrito'] as $indice => $producto) {

                    if ($producto['id'] == $id) {
                        unset($_SESSION['carrito'][$indice]);

                        echo "<script>alert('Elemento Borrado...');</script>";
                    }

                }

            } else {

                $mensaje .= "Upss... ID incorrecto " . $id . "<br/>";
            }
            break;
    }

}

?>