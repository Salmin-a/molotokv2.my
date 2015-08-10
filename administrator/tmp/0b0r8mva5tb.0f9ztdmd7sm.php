<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="row">
    <div class="col-md-12">
        <h2>Редактирование страницы <span id="id_page"><?php echo $page['id_page']; ?></span></h2>
        <h5>Редактирование одной страници сайта</span></h5>
    </div>
</div>

<hr>

<div class="row">
<form action="/administrator/page/save_page" method="post">

        <input name="id_page" type="hidden" value="<?php echo $page['id_page']; ?>">

        <div class="col-xs-12">
            <h4>Главная информация</h4>

            <div class="row">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">url</span>
                        <input name="url" id="url_page" value="<?php echo $page['url']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                    </div>
                    <br>
                </div>




                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Родитель</span>

                        <input name="level" id="hidden_level" type="hidden" value="<?php echo $page['level']; ?>">
                        <input name="parent" id="hidden_parent_page" type="hidden" value="<?php echo $page['parent']; ?>">

                        <select id="parent_page"  class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                            <?php foreach (($pages?:array()) as $item): ?>

                                <?php if ($item['id_page'] == ($page['parent'])): ?>
                                    
                                        <option selected data-item-id_page="<?php echo trim($item['id_page']); ?>"  data-item-level="<?php echo trim($item['level']); ?>"><?php echo trim($item['url']); ?></option>
                                    
                                    <?php else: ?>
                                        <option data-item-id_page="<?php echo trim($item['id_page']); ?>"  data-item-level="<?php echo trim($item['level']); ?>"><?php echo trim($item['url']); ?></option>
                                    
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>

                    </div>
                    <br>
                </div>


            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Имя</span>
                        <input name="name" id="name_page" value="<?php echo $page['name']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                    </div>
                    <br>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Title</span>
                        <input name="title" id="title_page" value="<?php echo $page['title']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                    </div>
                    <br>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Description</span>
                        <input name="description" id="description_page" value="<?php echo $page['description']; ?>" type="text" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                    </div>
                    <br>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">html</span>
                        <textarea name="html" id="html_page" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1" style="min-height: 750px;"><?php echo $html; ?></textarea>
                    </div>
                    <br>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-10">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Шаблон</span>

                        <select name="template" id="template_page" class="form-control" placeholder="Class" aria-describedby="basic-addon1">
                            <?php foreach (($templ?:array()) as $item): ?>

                                <?php if ($item['url'] == $page['template']): ?>
                                    
                                        <option  selected data-item-template="<?php echo trim($item['url']); ?>"><?php echo trim($item['url']); ?></option>
                                    
                                    <?php else: ?>
                                        <option data-item-template="<?php echo trim($item['url']); ?>"><?php echo trim($item['url']); ?></option>
                                    
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>

                    </div>
                    <br>
                </div>


                <div class="col-xs-2">
                    <div class="btn-group">
                        <button id="update_page" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>

        </div>

</div>

</form>


<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        $('#parent_page').change(function() {

            $('#hidden_parent_page').val(($('#parent_page option:selected').data('item-id_page')));
            $('#hidden_level').val(($('#parent_page option:selected').data('item-level'))+1);


        });


        $('#update_page134').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/page/save_page',
                data: (
                'id_page=' + $('#id_page').text()  + '&'  +
                'url=' + $('#url_page').val() + '&' +
                'name=' + $('#name_page').val() + '&' +
                'title=' + $('#title_page').val() + '&' +
                'description=' + $('#description_page').val() + '&' +
                'parent=' + $('#parent_page option:selected').data('item-id_page') + '&' +
                'level=' + $('#parent_page option:selected').data('item-level') + '&' +
                'template=' + $('#template_page option:selected').data('item-template') + '&' +
                'html=' + encodeURI($('#html_page').val())
                ),
                success: function(data){
                    alert(data);
                }
            });
        });
    });
</script>

<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>