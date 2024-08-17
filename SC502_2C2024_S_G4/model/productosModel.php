<?php
require_once('../model/conexionModel.php');

class productosModel{
    

    public static function get_productosActive(){

        try {
            $lista=conexionModel::now_execute('call pr_get_AllProductosActive');
            return$lista;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
            
        }
        

    }

    public static function get_productos(){

        try {
            $lista=conexionModel::now_execute('call get_AllProducts');
            return$lista;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
            
        }
        

    }

    public static function add_producto($datos){
        $sql = "INSERT INTO producto (especie_cafe, tipo_proceso, tipo_tueste, descripcion, precio, existencias, ruta_imagen, activo)
                VALUES ('{$datos['especie_cafe']}', '{$datos['tipo_proceso']}', '{$datos['tipo_tueste']}', '{$datos['descripcion']}', '{$datos['precio']}', '{$datos['existencias']}', '{$datos['ruta_imagen']}', {$datos['activo']})";
        try {
            $resultado = conexionModel::execute($sql);
            return $resultado['exito'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function update_producto($datos) {
        $sql = "UPDATE producto 
                SET especie_cafe = '{$datos['especie_cafe']}', 
                    tipo_proceso = '{$datos['tipo_proceso']}', 
                    tipo_tueste = '{$datos['tipo_tueste']}', 
                    descripcion = '{$datos['descripcion']}', 
                    precio = '{$datos['precio']}', 
                    existencias = '{$datos['existencias']}', 
                    ruta_imagen = '{$datos['ruta_imagen']}', 
                    activo = {$datos['activo']}
                WHERE id_producto = {$datos['id_producto']}";
        try {
            $resultado = conexionModel::execute($sql);
            return $resultado['exito'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function get_productoById($id_producto) {
        $sql = "SELECT * FROM producto WHERE id_producto = {$id_producto}";
        try {
            $producto = conexionModel::execute($sql);
            return $producto;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function delete_producto($id_producto) {
        $sql = "DELETE FROM producto WHERE id_producto = '{$id_producto}'";
        try {
            $resultado = conexionModel::execute($sql);
            return $resultado['exito'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function buscar_productos($termino) {
        $sql = "SELECT * FROM producto WHERE descripcion LIKE '%{$termino}%' AND activo = 1";
        try {
            return conexionModel::now_execute($sql);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function obtenerInformacionDelProducto($productoId) {
        $conexion = conexionModel::execute("SELECT id_producto, descripcion, precio FROM producto WHERE id_producto = $productoId");

        if ($conexion['exito']) {
            return mysqli_fetch_assoc($conexion['exito']);
        } else {
            return null; 
        }
    }
}
?>