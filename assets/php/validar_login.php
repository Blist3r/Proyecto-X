<?php

session_start();
require ('validaciones/conexion.php');

$conexion = conexion();

$usuario = $_POST['identificacion'];
$password = MD5($_POST['password']);

$sql = $conexion->prepare('SELECT * from usuarios where identificacion = :id and password = :pas');
$sql->bindParam(':id', $usuario);
$sql->bindParam(':pas', $password);
$sql->execute();

$resultado = $sql->rowCount();
$datos = $sql->fetchAll();

if ($resultado == 1) {
    $_SESSION['user'] = $datos[0]['id'];
    if ($datos[0]['tipo'] == 'admin') {
        header('location:../../admin');
    } else {
        header('location:../../index.php');
    }
} else {
    header('location:../../auth-login.php?e=1');
}

?>
