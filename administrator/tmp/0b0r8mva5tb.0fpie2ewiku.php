<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="jumbotron">
    <h1>Редактирование шаблона <?php echo $template['id']; ?></h1>
</div>

<div class="row">

        <input id="id_template" type="hidden" name="id" value="<?php echo $template['id']; ?>">

        <div class="col-xs-9">
            <h4>Главная информация</h4>

            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Имя</span>
                        <input id="name_template" value="<?php echo $template['name']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">url</span>
                        <input id="url_template" value="<?php echo $template['url']; ?>"  type="text" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1">
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10">

                </div>
                <div class="col-xs-2">
                    <div class="btn-group">
                        <button id="save_template" type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
             </div>
        </div>


        <div class="col-xs-3">
            <h4>Привязать шаблон
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button></h4>
            <select multiple size="25" style="width: 100%;">
                <?php foreach (($pages?:array()) as $item): ?>
                    <option  selected value="<?php echo trim($item['id_page']); ?>"><?php echo trim($item['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>


</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        $('#save_template').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/template/save_template',
                data: (
                'id=' + $('#id_template').val()  + '&'  +
                'name=' + $('#name_template').val()  + '&'  +
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