<?php

function conexion() {

    $usuario = 'root';
    $password = '';

    try {
        
        $mbd = new PDO('mysql:host=localhost;dbname=factory', $usuario, $password);
        return $mbd;

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

?>