<?php
require_once('../controller/empleadosController.php');
require_once('../model/conexionModel.php');

session_start();

$empleadosController = new empleadosController();

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['id_empleado']) || empty($_POST['id_empleado'])) {
        echo "Error: ID de empleado no proporcionado.";
        exit();
    }

    $datos = [
        'id_empleado' => htmlspecialchars($_POST['id_empleado']),
        'nombre' => htmlspecialchars($_POST['nombre']),
        'apellidos' => htmlspecialchars($_POST['apellidos']),
        'email' => htmlspecialchars($_POST['email']),
        'telefono' => htmlspecialchars($_POST['telefono']),
        'salario' => htmlspecialchars($_POST['salario']),
        'id_puesto' => htmlspecialchars($_POST['id_puesto']),
        'fecha_contratacion' => htmlspecialchars($_POST['fecha_contratacion']),
        'activo' => isset($_POST['activo']) ? 1 : 0
    ];

    $resultado = $empleadosController->actualizarEmpleado($datos);
    if ($resultado) {
        $message = 'Empleado actualizado exitosamente';
    } else {
        $message = 'Error al actualizar el empleado';
    }

    header("Location: editarEmpleado.php?id=" . urlencode($datos['id_empleado']) . "&message=" . urlencode($message));
    exit();
}
?>
