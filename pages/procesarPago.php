<?php

$idVenta = $_POST['id_venta'];
$referencia = $_POST['referencia'];
$metodo_pago = $_POST['metodo_pago'];

$pdo = new PDO('mysql:host=localhost;dbname=padel', 'root', '');

$sentencia = $pdo->prepare("INSERT INTO pagos (id_venta, referencia, metodo_pago) VALUES (:id_venta, :referencia, :metodo_pago)");
$sentencia->bindParam(":id_venta", $idVenta);
$sentencia->bindParam(':referencia', $referencia);
$sentencia->bindParam(':metodo_pago', $metodo_pago);
$sentencia->execute();

// Destruye la sesión
session_destroy();

/*if ($sentencia->rowCount() > 0) {
echo "El pago se registró correctamente.";
    
} else {
    echo "Ha ocurrido un error al registrar el pago.";
}*/
?>