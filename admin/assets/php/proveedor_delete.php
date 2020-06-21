<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('UPDATE proveedor set estado = 0 where id = '.$_POST['identificacion_proveedor_delete']);
$sql->execute();

$resultado = $sql->rowCount();

// print_r($sql->errorInfo());

if ($resultado == 1) {
    header('location:../../proveedor.php?delete=1');
} else {
    header('location:../../proveedor.php?delete=0');
}

?>