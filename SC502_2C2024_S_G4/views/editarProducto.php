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

    <h1 class="display-6 text-center m-5">Editar Producto</h1>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" th:action="@{/producto/guardar}" th:object="${producto}" class="was-validated" enctype="multipart/form-data">
                <input type="hidden" name="codigo" th:field="*{codigo}" />
                <input type="hidden" name="rutaImagen" th:field="*{rutaImagen}" />
                <div class="container py-4 mb-4 bg-light">
                    <div class="row">
                        <div class="col-md-4 d-grid">
                            <a href="./stock.php" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i> Regresar
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <a th:href="@{/producto/eliminar/}+${producto.idProducto}" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Eliminar
                            </a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <button type="submit" class="btn btn-success">
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
                                        <h4>Actualizar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" th:field="*{nombre}" required="true">
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcion">Descripción</label>
                                            <textarea class="form-control" name="descripcion" th:field="*{descripcion}" required="true"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="precio">Precio</label>
                                            <input type="number" class="form-control" name="precio" th:field="*{precio}" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="existencias">Existencias</label>
                                            <input type="number" class="form-control" name="existencias" th:field="*{existencias}" required="true" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="activo">Activo</label>
                                            <input class="form-check-input" type="checkbox" name="activo" id="activo" th:field="*{activo}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="imagen">Imagen</label>
                                            <input class="form-control" type="file" name="imagenFile" onchange="readURL(this);" />
                                            <img id="blah" th:src="@{${producto.rutaImagen}}" alt="your image" height="200" />
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