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
 //Muestra las formas de pago 
  var mostrarImagenBtn = document.getElementById("mostrarImagenBtn");
  var imagenWhatsapp = document.getElementById("imagenWhatsapp");

  mostrarImagenBtn.addEventListener("click", function() {
    
    imagenWhatsapp.style.display = "block";
  });
</script>

<script>
   // Tema de blanco y negro
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

<?php
require_once 'footer.php';
?>