<?php

require_once '../modelo/config.php';
require_once '../modelo/conexion.php';
require_once 'carrito.php';
require_once 'header.php';

?>

<head>
    <title>Pago</title>
</head>

<?php
if ($_POST) {

    $total = 0;
    $sid = session_id();
    $correo = $_POST['email'];

    foreach ($_SESSION['carrito'] as $indice => $producto) {

        $total = $total + ($producto['precio'] * $producto['cantidad']);

    }
    $sentencia = $pdo->prepare("INSERT INTO `ventas` (`id`, `clave_transaccion`, `zinli_datos`, `fecha`, `correo`, `total`, `status`) 
VALUES (NULL,:clave_transaccion, '', NOW(),:correo,:total, 'pendiente');");
    $sentencia->bindParam(":clave_transaccion", $sid);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->bindParam(":total", $total);
    $sentencia->execute();
    $idVenta = $pdo->lastInsertId();

    foreach ($_SESSION['carrito'] as $indice => $producto) {

        $sentencia = $pdo->prepare("INSERT INTO `detalle_venta` (`id`, `id_venta`, `id_producto`, `precio_unitario`, `cantidad`, `descargado`)
VALUES (NULL,:id_venta, :id_producto, :precio_unitario, :cantidad, '0');");

        $sentencia->bindParam(":id_venta", $idVenta);
        $sentencia->bindParam(":id_producto", $producto['id']);
        $sentencia->bindParam(":precio_unitario", $producto['precio']);
        $sentencia->bindParam(":cantidad", $producto['cantidad']);
        $sentencia->execute();

    }

}

?>

<div class="centrarFinal">
    <div class="bg-success text-center">
        <h1 class="display-4">¡Estamos Terminando!</h1>
        <hr class="my-4">
        <p class="lead">Estas a punto de pagar la cantidad de:
        <h4>$
            <?php echo number_format($total, 2); ?>
        </h4>
        </p>
        <p><br>
            <strong>(Si tienes dudas, comunicate con nosotros: info@padelgaag.com)</strong>
        </p>

    </div>
</div>
<div class="contenedorform">
    <div class="w-[45rem]">

        <div>

            <div class="tituloform">Seleccione su Método de Pago</div>
            <div class="cajaBotonesPago">

                <div>
                    <form action="procesarPago.php" method="POST">
                        <div>
                            <img src="../img/pago-movil-pag.png" class="imgpago btnpag"
                                onclick="mostrarInformacionPagomovil()" id="metodo_pago" title="Pago Movil">
                        </div>
                    </form>
                </div>

                <div>
                    <form action="procesarPago.php" method="POST">
                        <div>
                            <img src="../img/binance-pag.png" class="imgpago btnpag"
                                onclick="mostrarInformacionBinance()" name="metodo_pago" id="metodo_pago"
                                title="Binance">
                        </div>
                    </form>
                </div>

                <div>
                    <form action="procesarPago.php" method="POST">
                        <div>
                            <img src="../img/reserve-pag.png" class="imgpago btnpag"
                                onclick="mostrarInformacionReserve()" id="metodo_pago" title="Reserve">
                        </div>
                    </form>
                </div>

                <div>
                    <form action="procesarPago.php" method="POST">
                        <div>
                            <img src="../img/zinli-pag.png" class="imgpago btnpag" onclick="mostrarInformacionZinli()"
                                id="metodo_pago" title="Zinli">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div>
            <div>
                <form action="procesarPago.php" method="POST" id="formularioPagoMovil">
                    <div class="datospagobloque" id="containerPagomovil" style="display: none;">
                        <div class="text-center font-bold">Utilice los siguientes datos para realizar el PAGO MÓVIL
                        </div>
                        <div class="pagoMovil">
                            <div class="bordePagom">
                                <div><b class="infoPag">Banco:</b> <span class="infoPag">Bancaribe</span></div>
                                <div><b class="infoPag">Cédula:</b> <span class="infoPag">V24210544</span></div>
                                <div><b class="infoPag">Teléfono:</b> <span class="infoPag">+584165954386</span></div>
                            </div>
                        </div>
                        <div>
                            <div class="mt-2 font-bold text-center">
                                Últimos 4 dígitos de la Referencia del pago
                            </div>
                            <div class="ref">
                                <span>Coloca los últimos 4 digitos de la Referencia</span>
                            </div>
                            <div class="inputRef">
                                <input type="number" name="referencia" id="referencia"
                                    title="Debes colocar exactamente los últimos 4 dígitos" maxlength="4"
                                    class="referencia" required>
                            </div>

                            <div class="mt-2">
                                <input type="text" name="metodo_pago" value="Pago movil" style="display: none;">
                                <input type="text" name="id_venta" value="<?php echo $idVenta ?>" style="display: none;">
                                <button type="submit" class="botonpagoform" id="botonReportarPagoMovil">Reportar Pago</button>
                            </div>
                </form>
              
            </div>
        </div>

        <form action="procesarPago.php" method="POST" id="formularioPagoBinance">
            <div class="datospagobloque" id="containerBinance" style="display: none;">
                <div class="text-center font-bold space">

                    <span class="advertencia">Utilice este Email para realizar el pago</span>

                </div>
                <div class="metodospagos">

                    <span class="emailpago">gaag.m23@gmail.com</span>

                </div>
                <div class="ref">
                    <span>Coloca la Referencia de la Transacción</span>
                </div>
                <div class="inputRef">
                    <input type="number" name="referencia" id="referencia" required
                        title="Debes colocar la Referencia de la Transaccion" class="referenciaBrz">
                </div>

                <div class="mt-2">
                    <input type="text" name="metodo_pago" value="Binance" style="display: none;">
                    <input type="text" name="id_venta" value="<?php echo $idVenta ?>" style="display: none;">
                    <button type="submit" class="botonpagoform" id="botonReportarPagoBinance">Reportar Pago</button>
                </div>
        </form>
    </div>
    <form action="procesarPago.php" method="POST" id="formularioPagoReserve">
        <div class="datospagobloque" id="containerReserve" style="display: none;">
            <div class="text-center font-bold space">
                <span class="advertencia">Utilice este Email para realizar el pago</span>
            </div>
            <div class="metodospagos">

                <span class="emailpago">darthvader@gmail.com</span>

            </div>
            <div class="ref">
                <span>Coloca la Referencia de la Transacción</span>
            </div>
            <div class="inputRef">
                <input type="number" name="referencia" id="referencia" required
                    title="Debes colocar la Referencia de la Transaccion" class="referenciaBrz">
            </div>

            <div class="mt-2">
                <input type="text" name="metodo_pago" value="Reserve" style="display: none;">
                <input type="text" name="id_venta" value="<?php echo $idVenta ?>" style="display: none;">
                <button type="submit" class="botonpagoform" id="botonReportarPagoReserve">Reportar Pago</button>
            </div>
    </form>
</div>
<form action="procesarPago.php" method="POST" id="formularioPagoZinli">
    <div class="datospagobloque" id="containerZinli" style="display: none;">
        <div class="text-center font-bold space">
            <span class="advertencia">Utilice este Email para realizar el pago</span>
        </div>
        <div class="metodospagos">

            <span class="emailpago">padelgaag@gmail.com</span>

        </div>

        <div class="ref">
            <span>Coloca la Referencia de la Transacción</span>
        </div>
        <div class="inputRef">
            <input type="number" name="referencia" id="referencia" required
                title="Debes colocar la Referencia de la Transaccion" class="referenciaBrz">
        </div>
        <div class="mt-2">
            <input type="text" name="metodo_pago" value="Zinli" style="display: none;">
            <input type="text" name="id_venta" value="<?php echo $idVenta ?>" style="display: none;">
            <button type="submit" class="botonpagoform" id="botonReportarPagoZinli">Reportar Pago</button>
        </div>
</form>

<script>
    //PagoMovil
  document.getElementById("formularioPagoMovil").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: "procesarPago.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {

        window.location.href = "finalizarProceso.php";
      },
      error: function(xhr, status, error) {
        console.error(error);

      }
    });
  });

  //Binance
  document.getElementById("formularioPagoBinance").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: "procesarPago.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
    
        window.location.href = "finalizarProceso.php";
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });

  //Reserve
  document.getElementById("formularioPagoReserve").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: "procesarPago.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
    
        window.location.href = "finalizarProceso.php";
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });

    //Zinli
    document.getElementById("formularioPagoZinli").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: "procesarPago.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
    
        window.location.href = "finalizarProceso.php";
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
</script>

</div>
</div>
</div>
</div>
</div>

<?php require_once 'footer.php'; ?>