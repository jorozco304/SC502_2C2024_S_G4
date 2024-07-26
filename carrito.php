<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito - Tienda de Café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
        .cart-container {
            margin: 20px auto;
            max-width: 800px;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main class="container cart-container">
        <h2 class="text-center">Carrito</h2>
        <?php if (empty($_SESSION['cart'])): ?>
            <p class="text-center">Carrito de compras vacío...</p>
        <?php else: ?>
            <div class="list-group">
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1"><?php echo htmlspecialchars($item['name']); ?></h5>
                            <p class="mb-1">Precio: $<?php echo htmlspecialchars($item['price']); ?></p>
                        </div>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="remove" value="<?php echo htmlspecialchars($item['id']); ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-4">
                <a href="index.html" class="btn btn-primary">Seguir comprando</a>
                <a href="checkout.php" class="btn btn-success">Pagar</a>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
