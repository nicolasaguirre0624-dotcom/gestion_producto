<?php
// app/views/producto/index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
    <!-- Agrega tus estilos CSS aquí si los tienes -->
</head>
<body>
    <h1>Listado de Productos</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Proveedor</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= htmlspecialchars($producto['nombre'] ?? '') ?></td>
                        <td><?= htmlspecialchars($producto['precio'] ?? '') ?></td>
                        <td><?= htmlspecialchars($producto['stock'] ?? '') ?></td>
                        <td><?= htmlspecialchars($producto['nombre_proveedor'] ?? 'Sin proveedor') ?></td>
                        <td><?= htmlspecialchars($producto['nombre_categoria'] ?? 'Sin categoría') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay productos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>