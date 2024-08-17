<?php
require_once('../model/empleadosModel.php');

class empleadosController
{

    public static function view_get_empleados()
    {
        try {
            return empleadosModel::get_empleados();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function agregarEmpleados($datos)
    {
        try {
            return empleadosModel::add_empleado($datos);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function actualizarEmpleado($datos) {
        try {
            return empleadosModel::update_empleado($datos);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function view_get_EmpleadoById($id_empleado) {
        try {
            return empleadosModel::get_empleadoById($id_empleado);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function eliminarEmpleado($id_empleado) {
        try {
            return empleadosModel::delete_empleado($id_empleado);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
