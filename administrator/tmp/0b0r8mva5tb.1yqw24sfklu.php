<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="row">
    <div class="col-md-12">
        <h2>Редактирование модуля</h2>
        <h5>Редактирование модуля <span id="id_module"><?php echo $module['id_html']; ?></span></h5>
    </div>
</div>

<hr>

<div class="row">

    <form action="/administrator/module/save_module" method="post">
        <input name="id_html" value="<?php echo $module['id_html']; ?>" type="hidden">
        <input name="type" value="module" type="hidden">
        <input name="order" value="100" type="hidden">

        <div class="col-md-9">

        <div class="row">
            <div class="col-xs-12">
                <h4>Главная информация</h4>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Имя</span>
                            <input name="name" value="<?php echo $module['name']; ?>"  type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Позиция</span>
                            <input name="position" value="<?php echo $module['position']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">html</span>
                            <textarea name="html" id="html_module" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1" style="min-height: 600px;"><?php echo $module['html']; ?></textarea>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10">
                    </div>
                    <div class="col-xs-2">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
    </div>
    </form>

    <div class="col-md-3">
        <h4>Привязать модуль <button id="link_module" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button></h4>
        <select id="link_url_module" multiple size="25" style="width: 100%;">
            <?php foreach (($pages?:array()) as $item): ?>
                <?php if (isset($item['active'])): ?>
                    
                        <option selected value="<?php echo trim($item['id_page']); ?>"><?php echo trim($item['name']); ?></option>
                    
                    <?php else: ?>
                        <option value="<?php echo trim($item['id_page']); ?>"><?php echo trim($item['name']); ?></option>
                    
                <?php endif; ?>
            <?php endforeach; ?>

        </select>
    </div>

</div>


<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        $('#link_module').click( function() {

            var arr_link='';
            var d=$('#link_url_module option:selected').map(function(){
                arr_link += $(this).val() + ' ';
            });

            $.ajax({
                type: 'POST',
                url: '/administrator/module/link_module',
                data: (
                'id_html=' + $('#id_module').text()  + '&'  +
                'arr_pages=' + arr_link

                ),
                success: function(data){
                    alert(data);
                }
            });
        });




    });
</script>

<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>