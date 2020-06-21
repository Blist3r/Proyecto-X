<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('UPDATE producto set  nombre = "'.$_POST['nombre_producto_edit'].'", valor = "'.$_POST['valor_producto_edit'].'", estado = "'.$_POST['estado_valor_edit']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
   header('location:../../usuarios.php?update=1');
} else {
    header('location:../../usuarios.php?update=0');
}

?>