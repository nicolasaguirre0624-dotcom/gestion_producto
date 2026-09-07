<h1>Listado de Productos</h1>
<table border="5">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Proveedor</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
    <tr>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['stock'] ?></td>
      <td><?= $producto['nombre_proveedor'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>