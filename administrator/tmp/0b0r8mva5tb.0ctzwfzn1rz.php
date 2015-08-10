<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>



<div class="row">
    <div class="col-md-12">
        <h2>Все модули</h2>
        <h5>Редактирование модулей с произвольным HTML</h5>
    </div>
</div>

<hr>



<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                Список модулей
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Позиция</th>
                            <th>Редактировать</th>
                        </tr>
                        </thead>
                        <tbody  id="all_rows">

                            <?php foreach (($module?:array()) as $item): ?>
                                <tr>
                                    <td><?php echo trim($item['id_html']); ?></td>

                                    <td><?php echo trim($item['name']); ?></td>
                                    <td><?php echo trim($item['position']); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/administrator/module/editbyid/<?php echo trim($item['id_html']); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                                            <a href="/administrator/module/delete/<?php echo trim($item['id_html']); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        <tr>
                            <td>
                                Добавить 12
                            </td>

                            <td>
                                <div class="input-group">
                                    <input id="name_module" value="Модуль" type="text" class="form-control" placeholder="Название" aria-describedby="basic-addon1">
                                </div>
                            </td>

                            <td>
                                <div class="input-group">
                                    <input id="position_module" value="left" type="text" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1">
                                </div>
                            </td>


                            <td>
                                <div class="btn-group">
                                    <button id="add_module" type="button" class="btn btn-primary">Добавить</button>
                                </div>
                            </td>

                        </tr>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>



<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#add_module').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/module/add_module',
                data: (
                'position=' + $('#position_module').val() + '&' +
                'name=' + $('#name_module').val() + '&' +
                'html=' + 'none' + '&' +
                'type=' + 'module' + '&' +
                'order=' + '100'
                ),
                success: function(data){
                    alert(data);
                }
            });
        });
    });
</script>

<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>