<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();


$password = MD5($_POST['password']);

$sql = $conexion->prepare('INSERT into usuarios values ("", :identificacion, :nombre, :apellido, :pas, :certificado, :sede, :tipo, :estado)');
$sql->bindParam(':identificacion', $_POST['identificacion']);
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':apellido', $_POST['apellido']);
$sql->bindParam(':pas', $password);
$sql->bindParam(':certificado', $_POST['fecha_certificado']);
$sql->bindParam(':sede', $_POST['sede']);
$sql->bindParam(':tipo', $_POST['tipo']);
$sql->bindParam(':estado', $_POST['estado']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
    header('location:../../usuarios.php?create=1');
} else {
    header('location:../../usuarios.php?create=0');
}

?>