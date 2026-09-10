<h1>Listado Productos</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <tr>
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
        <th>Nombre</th>
        <th>Precio</th>

    </tr>

     <tr>
            <td><?= $productoConsultado['nombre'] ?></td>
            <td><?= $productoConsultado['precio'] ?></td>
    </tr>
   
</table>