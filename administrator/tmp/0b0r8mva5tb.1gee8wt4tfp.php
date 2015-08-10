<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="row">
    <div class="col-md-12">
        <h2>Редактирование меню <span id="id_menu"><?php echo $menu['id_menu']; ?></span></h2>
        <h5>Редактирование одного модуля меню</h5>


    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-7">

        <div class="row">
            <div class="col-xs-12">
                <h4>Главная информация</h4>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Имя</span>
                            <input id="name_menu" value="<?php echo $menu['name_menu']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                        </div>
                        <br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Class</span>
                            <input id="class_menu" value="<?php echo $menu['class']; ?>"  type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                        </div>
                        <br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Позиция</span>
                            <input id="position_menu" value="<?php echo $menu['position']; ?>" type="text" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10">
                    </div>
                    <div class="col-xs-2">
                        <div class="btn-group">
                            <button id="save_menu" type="button" class="btn btn-primary">Сохранить</button>
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
                <h4>Пункты меню</h4>

                <?php if (!empty($menu_list)): ?>
                    
                        <?php foreach (($menu_list?:array()) as $item): ?>
                            <div class="row">
                                <div class="col-xs-1"> <?php echo trim($item['id_page']); ?></div>
                                <div class="col-xs-5"><input name="position" value="<?php echo trim($item['ankor']); ?>"  type="text" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1"></div>
                                <div class="col-xs-4"><?php echo trim($item['url']); ?></div>
                                <div class="col-xs-2" style="text-align: right;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    
                <?php endif; ?>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2">Добавить</div>
            <div class="col-xs-5"><input id="ankor" value=""  type="text" class="form-control" placeholder="Название" aria-describedby="basic-addon1"></div>
            <div class="col-xs-4">
                <select id="name_page" class="form-control" >
                    <?php foreach (($pages?:array()) as $item): ?>
                        <option value="<?php echo trim($item['id_page']); ?>"><?php echo trim($item['url']); ?> | <?php echo trim($item['name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-xs-1">
                <div class="btn-group">
                    <button id="addlist_menu" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-5">
        <h4>Привязать меню <button id="link_menu" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button></h4>

        <input id="searchInput" class="type-search" type="text" />

        <select id="link_url_menu" multiple size="25" style="width: 100%;">
            <?php foreach (($pages?:array()) as $item): ?>
                <?php if (isset($item['active'])): ?>
                    
                        <option selected value="<?php echo trim($item['id_page']); ?>"><?php echo trim($item['name']); ?> | <?php echo trim($item['url']); ?></option>
                    
                    <?php else: ?>
                        <option value="<?php echo trim($item['id_page']); ?>"><?php echo trim($item['name']); ?> | <?php echo trim($item['url']); ?></option>
                    
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>

</div>


<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        $('#link_menu').click( function() {

            var arr_link='';
            var d=$('#link_url_menu option:selected').map(function(){
                arr_link += $(this).val() + ' ';
            });

            $.ajax({
                type: 'POST',
                url: '/administrator/menu/link_menu',
                data: (
                'id_menu=' + $('#id_menu').text()  + '&'  +
                'arr_pages=' + arr_link

                ),
                success: function(data){
                    alert(data);
                }
            });
        });


        $('#save_menu').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/menu/save_menu',
                data: (
                'id_menu=' + $('#id_menu').text()  + '&'  +
                'name_menu=' + $('#name_menu').val() + '&' +
                'class=' + $('#class_menu').val() + '&' +
                'position=' + $('#position_menu').val()
                ),
                success: function(data){
                    alert(data);
                }
            });
        });


        $('#addlist_menu').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/menu/addlist_menu',
                data: (
                'id_menu=' + $('#id_menu').text()  + '&'  +
                'id_page=' + $('#name_page option:selected').val() + '&' +
                'ankor=' + $('#ankor').val()
                ),
                success: function(data){
                    alert(data);
                }
            });
        });



        var field = $('#link_url_menu').find('option');

        $('#searchInput').keyup('keyup', function() {
            var q = new RegExp($(this).val(), 'ig');

            for (var i = 0, l = field.length; i < l; i += 1) {
                var option = $(field[i]),
                        parent = option.parent();

                if ($(field[i]).text().match(q)) {
                    option.css('background-color', '#00ff00');
                } else {
                    option.css('background-color', '#ffffff');
                }
            }
        });

    });
</script>


<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>