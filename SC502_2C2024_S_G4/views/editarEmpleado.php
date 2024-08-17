<?php
require_once('../controller/empleadosController.php');
require_once('../model/conexionModel.php');

session_start();

$id_empleado = $_GET['id'];

$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

$empleadosController = new empleadosController();

$empleado = null;
try {
    $empleados = $empleadosController->view_get_Empleados();
    foreach ($empleados as $empl) {
        if ($empl['id_empleado'] == $id_empleado) {
            $empleado = $empl;
            break;
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

if ($empleado == null) {
    header("Location: empleados.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            font-family: "Quicksand", sans-serif;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <header>
        <?php
        include 'header.php'
        ?>
    </header>

    <h1 class="display-6 text-center m-5">Editar Empleado</h1>

    <?php if (!empty($message)) : ?>
        <div class="alert alert-info text-center"><?= $message ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" action="procesarActualizarEmpleado.php" enctype="multipart/form-data">
            <input type="hidden" name="id_empleado" value="<?= htmlspecialchars($empleado['id_empleado']) ?>" />
            <input type="hidden" name="fecha_contratacion" value="<?= htmlspecialchars($empleado['fecha_contratacion']) ?>" />
                <div class="container py-4 mb-4 bg-light">
                    <div class="row">
                        <div class="col-md-4 d-grid">
                            <a href="./empleados.php" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left"></i> Regresar
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <a href="./procesarEliminarEmpleado.php?id=<?= $empleado['id_empleado'] ?>" class="btn btn-outline-danger"> <i class="fas fa-trash"></i> Eliminar
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <button type="submit" class="btn btn-outline-success">
                                <i class="fas fa-check"></i> Guardar
                            </button>
                        </div>
                    </div>
                </div>
                <div id=details>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Actualizar Empleado</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" value="<?= htmlspecialchars($empleado['nombre']) ?>" required="true">
                                        </div>
                                        <div class="mb-3">
                                            <label for="apellidos">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" value="<?= htmlspecialchars($empleado['apellidos']) ?>" required="true">
                                        </div>
                                        <div class="mb-3">
                                            <label for="salario">Salario</label>
                                            <input type="number" class="form-control" name="salario" value="<?= htmlspecialchars($empleado['salario']) ?>" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Correo</label>
                                            <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($empleado['email']) ?>" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="telefono">Telefono</label>
                                            <input type="tel" class="form-control" name="telefono" value="<?= htmlspecialchars($empleado['telefono']) ?>" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="fecha_contratacion">Fecha de Contratacion</label>
                                            <input type="date" class="form-control" name="fecha_contratacion" value="<?= htmlspecialchars($empleado['fecha_contratacion']) ?>" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_puesto">Puesto</label>
                                            <input type="number" class="form-control" name="id_puesto" value="<?= htmlspecialchars($empleado['id_puesto']) ?>" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="activo">Activo</label>
                                            <input class="form-check-input" type="checkbox" name="activo" id="activo" value="1" <?= $empleado['activo'] ? 'checked' : '' ?>>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
    </div>

</body>

</html>