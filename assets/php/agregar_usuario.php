<?php

require ('validaciones/conexion.php');

$conexion = conexion();

$password = MD5($_POST['password']);

$sql = $conexion->prepare('INSERT into usuarios values ("", :id, :nombre, :apellido, :pas, :fecha, :sede, :tipo)');
$sql->bindParam(':id', $_POST['identificacion']);
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':apellido', $_POST['apellido']);
$sql->bindParam(':pas', $password);
$sql->bindParam(':fecha', $_POST['fecha_certificado']);
$sql->bindParam(':sede', $_POST['sede']);
$sql->bindParam(':tipo', $_POST['tipo']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
    header('location:../../agregar_usuario.php?e=1');
} else {
    header('location:../../agregar_usuario.php?e=0');
}

?>