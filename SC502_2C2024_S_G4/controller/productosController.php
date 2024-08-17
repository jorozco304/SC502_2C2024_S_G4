<?php
require_once('../model/productosModel.php');

class productosController
{

    public static function view_get_ProductosActivos()
    {
        try {
            return productosModel::get_productosActive();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function view_get_Productos()
    {
        try {
            return productosModel::get_productos();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function agregarProducto($datos)
    {
        try {
            return productosModel::add_producto($datos);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function actualizarProducto($datos) {
        try {
            return productosModel::update_producto($datos);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function view_get_ProductoById($id_producto) {
        try {
            return productosModel::get_productoById($id_producto);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function eliminarProducto($id_producto) {
        try {
            return productosModel::delete_producto($id_producto);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public static function buscarProductos($termino) {
        try {
            return productosModel::buscar_productos($termino);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    static function  obtenerInformacionDelProducto($productoId) {
    return productosModel::obtenerInformacionDelProducto($productoId);
}


}
