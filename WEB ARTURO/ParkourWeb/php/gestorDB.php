<?php

function getCitas() {

include "php/configuracion.php";
//array de Citas
$citas = array();

// FETCH_OBJ
$stmt = $dbh->prepare("SELECT * FROM citas");
// Ejecutamos
$stmt->execute();
// Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    //metemos todas las citas dentro del array.
    array_push($citas, $row->cita);
}

return $citas;

}


?>
