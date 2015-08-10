<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="row">
    <div class="col-md-12">
        <h2>Все Шаблоны</h2>
        <h5>Редактирование шаблонов сайта</span></h5>
    </div>
</div>

<hr>

    <div class="row">
        <div class="col-xs-1">ID</div>
        <div class="col-xs-4">Имя</div>
        <div class="col-xs-5">url</div>
        <div class="col-xs-2">Редактировать</div>
    </div>

    <div class="row">
        <br>
    </div>


    <?php foreach (($template?:array()) as $item): ?>
        <div class="row">
            <div class="col-xs-1"><?php echo trim($item['id']); ?></div>
            <div class="col-xs-4"><?php echo trim($item['name']); ?></div>
            <div class="col-xs-5"><?php echo trim($item['url']); ?></div>

            <div class="col-xs-2">
                <div class="btn-group">
                    <a href="/administrator/template/editbyid/<?php echo trim($item['id']); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                    <a href="/administrator/template/delete/<?php echo trim($item['id']); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                </div>
            </div>

        </div>

        <div class="row">
            <br>
        </div>
    <?php endforeach; ?>


<div class="row">
    <div class="col-xs-1">
        Добавить
    </div>

    <div class="col-xs-4">
        <div class="input-group">
            <input id="name_template" value="Имя" type="text" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="col-xs-5">
        <div class="input-group">
            <input id="url_template" value="main/index.html" type="text" class="form-control" placeholder="url" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="col-xs-2">
        <div class="btn-group">
            <button id="add_tempalte" type="button" class="btn btn-primary">Добавить</button>
        </div>
    </div>
</div>


<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#add_tempalte').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/template/add_template',
                data: (
                'name=' + $('#name_template').val() + '&' +
                'url=' + $('#url_template').val()
                ),
                success: function(data){
                    alert(data);
                }
            });
        });
    });
</script>


<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>