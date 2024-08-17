<?php
require_once('../controller/productosController.php');
require_once('../model/conexionModel.php');

session_start();

$id_producto = $_GET['id'];

$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

$productosController = new productosController();

$producto = null;
try {
    $productos = $productosController->view_get_Productos();
    foreach ($productos as $prod) {
        if ($prod['id_producto'] == $id_producto) {
            $producto = $prod;
            break;
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

if ($producto == null) {
    header("Location: stock.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <h1 class="display-6 text-center m-5">Editar Producto</h1>

    <?php if (!empty($message)) : ?>
        <div class="alert alert-info text-center"><?= $message ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" action="procesarActualizar.php" enctype="multipart/form-data">
                <input type="hidden" name="id_producto" value="<?= htmlspecialchars($producto['id_producto']) ?>" />
                <input type="hidden" name="ruta_imagen" value="<?= htmlspecialchars($producto['ruta_imagen']) ?>" />
                <div class="container py-4 mb-4 bg-light">
                    <div class="row">
                        <div class="col-md-4 d-grid">
                            <a href="./stock.php" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left"></i> Regresar
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <a href="./procesarEliminar.php?id=<?= $producto['id_producto'] ?>" class="btn btn-outline-danger">
                                <i class="fas fa-trash"></i> Eliminar
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <button type="submit" class="btn btn-outline-success">
                                <i class="fas fa-check"></i> Guardar
                            </button>
                        </div>
                    </div>
                </div>
                <div id="details">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Actualizar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="especie_cafe">Especie de Café</label>
                                            <input type="text" class="form-control" name="especie_cafe" value="<?= htmlspecialchars($producto['especie_cafe']) ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tipo_proceso">Tipo de Proceso</label>
                                            <input type="text" class="form-control" name="tipo_proceso" value="<?= htmlspecialchars($producto['tipo_proceso']) ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tipo_tueste">Tipo de Tueste</label>
                                            <input type="text" class="form-control" name="tipo_tueste" value="<?= htmlspecialchars($producto['tipo_tueste']) ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcion">Descripción</label>
                                            <textarea class="form-control" name="descripcion" required><?= htmlspecialchars($producto['descripcion']) ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="precio">Precio</label>
                                            <input type="number" class="form-control" name="precio" value="<?= htmlspecialchars($producto['precio']) ?>" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="existencias">Existencias</label>
                                            <input type="number" class="form-control" name="existencias" value="<?= htmlspecialchars($producto['existencias']) ?>" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="activo">Activo</label>
                                            <input class="form-check-input" type="checkbox" name="activo" <?= $producto['activo'] ? 'checked' : '' ?>>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ruta_imagen">Ruta imagen</label>
                                            <input type="text" name="ruta_imagen" value="<?= htmlspecialchars($producto['ruta_imagen']) ?>" />
                                            <img id="blah" src="<?= htmlspecialchars($producto['ruta_imagen']) ?>" alt="Imagen del producto" height="200" />
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
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>