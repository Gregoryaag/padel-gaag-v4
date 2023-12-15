<?php

require_once '../modelo/config.php';
require_once 'carrito.php';
require_once 'header.php';

?>

<head>
<title>Carrito</title>
</head>

<br>

<h3>Lista del Carrito</h3>

<?php if (!empty($_SESSION['carrito'])) { ?>

    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width="40%">Nombre</th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="20%" class="text-center">Total</th>
                <th width="5%">--</th>
            </tr>

            <?php $total = 0; ?>

            <?php foreach ($_SESSION['carrito'] as $indice => $producto) { ?>
                <tr>
                    <td width="40%">
                        <?php echo $producto['nombre'] ?>
                    </td>
                    <td width="15%" class="text-center">
                        <?php echo $producto['cantidad'] ?>
                    </td>
                    <td width="20%" class="text-center">$
                        <?php echo $producto['precio'] ?>
                    </td>
                    <td width="20%" class="text-center">$
                        <?php echo number_format($producto['precio'] * $producto['cantidad'], 2); ?>
                    </td>

                    <td width="5%">
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id"
                                value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                            <button class="btn btn-danger" type="submit" name="btnAccion" value="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>

                <?php $total = $total + ($producto['precio'] * $producto['cantidad']); ?>

            <?php } ?>
            <tr>
                <td colspan="3" align="right">
                    <h3>Total</h3>
                </td>
                <td align="right">
                    <h3>$
                        <?php echo number_format($total, 2); ?>
                    </h3>
                </td>
                <td></td>
            </tr>

            <tr>
                <td colspan="5">
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success">
                            <div class="form-group">
                                <label for="my-input">Correo de Contacto:</label>
                                <input id="email" name="email" class="form-control" type="email"
                                    placeholder="Escribe tu correo" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">
                                Los Productos se Enviaran a este Correo.
                            </small>
                        </div>
                        <button class="btn btn-primary btn-lg w-100"><a href="pagar.php"></a>Proceder a Pagar >></button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>

<?php } else { ?>
    <div class="alert alert-success">
        No hay Productos en el Carrito...
    </div>
<?php } ?>
<?php
require_once 'footer.php';
?>