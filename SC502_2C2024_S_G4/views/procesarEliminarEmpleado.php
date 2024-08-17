<?php

require_once('../controller/empleadosController.php');
require_once('../model/conexionModel.php');

session_start();

$empleadosController = new empleadosController();

if (isset($_GET['id'])) {
    $id_empleado = $_GET['id'];
    $resultado = $empleadosController->eliminarEmpleado($id_empleado);

    if ($resultado) {
        $message = 'Empleado eliminado exitosamente';
    } else {
        $message = 'Error al eliminar el empleado';
    }
} else {
    $message = 'ID de empleado no proporcionado';
}

header("Location: empleados.php?message=" . urlencode($message));
exit();
?>
