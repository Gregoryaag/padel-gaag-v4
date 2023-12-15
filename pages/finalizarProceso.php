<?php

require_once 'header.php';

?>

<title>Finalizar</title>

<div class="centrarFinal">
    <div class="bg-success text-center">
        <h1 class="display-4">¡Pedido Realizado con Éxito!</h1>
        <hr class="my-4">
        <p class="lead">¡Estamos verificando el pago, en breve le contactaremos!
        <h4>
        </h4>
        </p>
        <p><br>
            <strong>Para una mejor atención y seguimiento de su compra puede escribir a nuestro WhatsApp</strong>
        </p>
        <br>
        <div class="flex-d">
        <button class="botonFinalw" type="button" id="mostrarImagenBtn">WhatsApp</button>
        </div>
    </div>
    <br>
    <div class="flex-d">
    <img src="../img/Padel-whats.jpeg" alt="WhatsApp" width="300px" id="imagenWhatsapp" style="display: none;">
    </div>
</div>

<script>
  // Obtén el botón y la imagen por su id
  var mostrarImagenBtn = document.getElementById("mostrarImagenBtn");
  var imagenWhatsapp = document.getElementById("imagenWhatsapp");

  // Agrega un controlador de eventos al botón para el evento click
  mostrarImagenBtn.addEventListener("click", function() {
    // Cambia el estilo de la imagen para mostrarla
    imagenWhatsapp.style.display = "block";
  });
</script>

<?php
require_once 'footer.php';
?>