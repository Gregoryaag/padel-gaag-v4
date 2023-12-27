<?php

require_once 'header.php';

?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Alquiler de Canchas</title>
</head>
<body class="light-theme">

<br>
<div class="alquilaYa">
<h3>
    !Escribenos y reserva nuestras Canchas de Padel de 7 a.m a 11 p.m, 2 horas por tan solo $40. Disfruta del
    mejor deporte! Reserva ya. !Te esperamos en Sport Gaag!
    <br>
    <br>
    <strong class="advertenciaAnimacion" id="advertencia">Deslice la imagen para ver más canchas >></strong>
</h3>
</div>

<div class="swiper mySwiper container">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #1</p>
            </div>
            <img class="" src="../img/canchap1.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #2</p>
            </div>
            <img class="" src="../img/canchap2.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #3</p>
            </div>
            <img class="" src="../img/canchap3.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #4</p>
            </div>
            <img class="" src="../img/canchap4.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #5</p>
            </div>
            <img class="" src="../img/canchap5.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #6</p>
            </div>
            <img class="" src="../img/canchap6.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #7</p>
            </div>
            <img class="" src="../img/canchap7.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

        <div class="swiper-slide">
            <div class="swiper-txt">
                <p>Cancha #8</p>
            </div>
            <img class="" src="../img/canchap8.png" alt="">
            <a class="boton" href="../img/Padel-whats.jpeg" target="_blank">Reservar</a>
        </div>

    </div>
</div>

<?php
require_once 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 80,
        grabCursor: true,
        loop: true
    })
</script>

<script>
    //Mensaje de advertencia para hacer uso del carrusel
    const advertencia = document.getElementById('advertencia');

    setInterval(() => {
      if (advertencia.style.color === 'greenyellow') {
        advertencia.style.color = 'red';
      } else {
        advertencia.style.color = 'greenyellow';
      }
    }, 3000);
  </script>

  <script>
    //Tema de blanco y negro
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