<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="row">
    <div class="col-md-12">
        <h2>Все страницы</h2>
        <h5>Редактирование страниц сайта</span></h5>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                Список страниц
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>url</th>
                            <th>Родитель</th>
                            <th>Уровень</th>
                            <th>Шаблон</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach (($page?:array()) as $item): ?>
                            <tr>
                                <td><?php echo trim($item['id_page']); ?></td>
                                <td><?php echo trim($item['name']); ?></td>
                                <td><?php echo trim($item['url']); ?></td>
                                <td><?php echo trim($item['parent']); ?></td>
                                <td><?php echo trim($item['level']); ?></td>
                                <td><?php echo trim($item['template']); ?></td>

                                <td>
                                    <div class="btn-group">
                                        <a href="/administrator/page/editbyid/<?php echo trim($item['id_page']); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                                        <a href="/administrator/page/delete/<?php echo trim($item['id_page']); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                                    </div>
                                    </td>
                            </tr>
                        <?php endforeach; ?>
                        <td></td>
                        <td><input id="name_page" value="" type="text" class="form-control" placeholder="Имя" aria-describedby="basic-addon1"></td>
                        <td><input id="url_page" value="/" type="text" class="form-control" placeholder="url" aria-describedby="basic-addon1"></td>
                        <td><input id="parent_page" value="1" type="text" class="form-control" placeholder="Родитель" aria-describedby="basic-addon1"></td>
                        <td><input id="level_page" value="2" type="text" class="form-control" placeholder="Уровень" aria-describedby="basic-addon1"></td>
                        <td><input id="template_page" value="main/index.html" type="text" class="form-control" placeholder="Шаблон" aria-describedby="basic-addon1"></td>
                        <td><button id="add_page" type="button" class="btn btn-danger">Добавить</button></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#add_page').click( function() {

            $.ajax({
                type: 'POST',
                url: '/administrator/page/add_page',
                data: (
                'url=' + $('#url_page').val() + '&' +
                'name=' + $('#name_page').val() + '&' +
                'parent=' + $('#parent_page').val() + '&' +
                'level=' + $('#level_page').val() + '&' +
                'template=' + $('#template_page').val() + '&' +
                'html=' + 'null'
                ),
                success: function(data){
                    alert(data);
                }
            });
        });
    });
</script>
<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>