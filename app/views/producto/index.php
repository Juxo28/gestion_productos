<h1>Listado Productos</h1>

<table>
    <tr>

        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['categoria'] ?></td>
            <td><?= $producto['proveedor'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Producto Consultado</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>

    </tr>

    <?php foreach ($productoConsultado as $producto): ?>
     <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
    </tr>
   <?php endforeach; ?>
</table>