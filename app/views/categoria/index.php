<h1>Listado de Categorias</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?=  $categoria['id'] ?></td>
            <td><?=  $categoria['nombre'] ?></td>
            <td><?=  $categoria['descripcion'] ?></td>
        </tr>
        <?php endforeach ?>
</table>