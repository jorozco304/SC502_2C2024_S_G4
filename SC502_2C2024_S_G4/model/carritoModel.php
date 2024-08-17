<?php

require_once('../model/conexionModel.php');

class carritoModel {

private $sessionKey = 'carrito'; 

public function agregarAlCarrito($productoId, $cantidad) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION[$this->sessionKey])) {
        $_SESSION[$this->sessionKey] = array();
    }

    if (isset($_SESSION[$this->sessionKey][$productoId])) {
        $_SESSION[$this->sessionKey][$productoId] += $cantidad;
    } else {
        $_SESSION[$this->sessionKey][$productoId] = $cantidad;
    }
}

public function eliminarDelCarrito($productoId) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION[$this->sessionKey][$productoId])) {
        unset($_SESSION[$this->sessionKey][$productoId]);
    }
}

public function obtenerCarrito() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    return isset($_SESSION[$this->sessionKey]) ? $_SESSION[$this->sessionKey] : array();
}

public function obtenerPreciosDeProductos() {
    $scriptSQL = "SELECT id_producto, precio FROM producto"; 

    $resultados = conexionModel::now_execute($scriptSQL);
    
    $precios = [];
    
    foreach ($resultados as $fila) {
        $precios[$fila['id_producto']] = $fila['precio'];
    }
    
    return $precios;
}

public function calcularTotal($precios) {
    $total = 0;
    $carrito = $this->obtenerCarrito();

    foreach ($carrito as $productoId => $cantidad) {
        if (isset($precios[$productoId])) {
            $total += $precios[$productoId] * $cantidad;
        }
    }

    return $total;
}
}
?>