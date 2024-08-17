<?php
require_once('../model/conexionModel.php');

class empleadosModel{
    

    public static function get_empleados(){

        try {
            $lista=conexionModel::now_execute('call pr_getAllEmpleados');
            return$lista;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
            
        }
        

    }


    public static function add_empleado($datos){
        $sql = "INSERT INTO empleado (nombre, apellidos, email, telefono, salario, id_puesto, fecha_contratacion, activo)
                VALUES ('{$datos['nombre']}', '{$datos['apellidos']}', '{$datos['email']}', '{$datos['telefono']}', 
                '{$datos['salario']}', '{$datos['id_puesto']}', '{$datos['fecha_contratacion']}', {$datos['activo']})";
        try {
            $resultado = conexionModel::execute($sql);
            return $resultado['exito'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function update_empleado($datos) {
        if (!isset($datos['id_empleado'])) {
            throw new Exception('ID de empleado no proporcionado.');
        }
    
        $id_empleado = intval($datos['id_empleado']);
        $nombre = htmlspecialchars($datos['nombre']);
        $apellidos = htmlspecialchars($datos['apellidos']);
        $email = htmlspecialchars($datos['email']);
        $telefono = htmlspecialchars($datos['telefono']);
        $salario = floatval($datos['salario']);
        $id_puesto = intval($datos['id_puesto']);
        $fecha_contratacion = htmlspecialchars($datos['fecha_contratacion']);
        $activo = isset($datos['activo']) ? 1 : 0;
    
        $sql = "UPDATE empleado 
                SET nombre = '{$nombre}', 
                    apellidos = '{$apellidos}', 
                    email = '{$email}', 
                    telefono = '{$telefono}', 
                    salario = '{$salario}', 
                    id_puesto = '{$id_puesto}', 
                    fecha_contratacion = '{$fecha_contratacion}', 
                    activo = {$activo}
                WHERE id_empleado = {$id_empleado}";
    
        try {
            $resultado = conexionModel::execute($sql);
            return $resultado['exito'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public static function get_empleadoById($id_empleado) {
        $sql = "SELECT * FROM empleado WHERE id_empleado = {$id_empleado}";
        try {
            $empleado = conexionModel::execute($sql);
            return $empleado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function delete_empleado($id_empleado) {
        $sql = "DELETE FROM empleado WHERE id_empleado = '{$id_empleado}'";
        try {
            $resultado = conexionModel::execute($sql);
            return $resultado['exito'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>