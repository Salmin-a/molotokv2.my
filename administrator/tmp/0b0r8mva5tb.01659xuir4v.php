<?php foreach (($menu?:array()) as $item): ?>
    <tr>
        <td><?php echo trim($item['id_menu']); ?></td>
        <td><?php echo trim($item['name_menu']); ?></td>
        <td><?php echo trim($item['class']); ?></td>
        <td><?php echo trim($item['position']); ?></td>
        <td>
            <div class="btn-group">
                <a href="/administrator/menu/editbyid/<?php echo trim($item['id_menu']); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                <a href="/administrator/menu/delete/<?php echo trim($item['id_menu']); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
            </div>
        </td>
    </tr>

<?php endforeach; ?>
