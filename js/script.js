function mostrarInformacionPagomovil() {
    var containerPagomovil = document.getElementById("containerPagomovil");
    containerPagomovil.style.display = "block";
    containerBinance.style.display = "none";
    containerReserve.style.display = "none";
    containerZinli.style.display = "none";
  }

  function mostrarInformacionBinance() {
    var containerBinance = document.getElementById("containerBinance");
    containerBinance.style.display = "block";
    containerPagomovil.style.display = "none";
    containerReserve.style.display = "none";
    containerZinli.style.display = "none";
  }

  function mostrarInformacionReserve() {
    var containerReserve = document.getElementById("containerReserve");
    containerReserve.style.display = "block";
    containerPagomovil.style.display = "none";
    containerBinance.style.display = "none";
    containerZinli.style.display = "none";
  }

  function mostrarInformacionZinli() {
    var containerZinli = document.getElementById("containerZinli");
    containerZinli.style.display = "block";
    containerPagomovil.style.display = "none";
    containerReserve.style.display = "none";
    containerBinance.style.display = "none";
  }

  /*Finalizar Proceso*/