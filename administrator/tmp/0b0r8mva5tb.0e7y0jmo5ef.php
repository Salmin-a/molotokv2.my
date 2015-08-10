<?php echo $this->render('header.html',$this->mime,get_defined_vars()); ?>

<div class="row">
    <div class="col-md-12">
        <h2>Все меню</h2>
        <h5>Редактирование ммодулей меню</h5>
    </div>
</div>

<hr>


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                Список меню
            </div>
            <div class="panel-body">
                <div class="table-responsive">


                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>Класс</th>
                            <th>Позиция<br>
                                <input id="filter_pos" value=""> <label>↵</label>
                            </th>
                            <th>Редактировать</th>
                        </tr>
                        </thead>
                        <tbody  id="all_rows">


                            <?php foreach (($menu?:array()) as $item): ?>
                            <tr>
                                <td><?php echo trim($item['id_menu']); ?> </td>
                                        <td><?php echo trim($item['name_menu']); ?> </td>
                                        <td><?php echo trim($item['class']); ?> </td>
                                        <td><?php echo trim($item['position']); ?> </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/administrator/menu/editbyid/<?php echo trim($item['id_menu']); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
                                            <a href="/administrator/menu/delete/<?php echo trim($item['id_menu']); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
                                        </div>
                                    </td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>







<div class="row"><br></div>


<div class="row">
    <div class="col-xs-12">
        <hr>
    </div>
</div>


<div class="row">
    <div class="col-xs-1">
        Добавить
    </div>

    <div class="col-xs-3">
        <div class="input-group">
            <input id="name_menu" value="/" type="text" class="form-control" placeholder="url" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="input-group">
            <input id="class_menu" value="" type="text" class="form-control" placeholder="class" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="col-xs-3">
        <div class="input-group">
            <input id="position_menu" value="" type="text" class="form-control" placeholder="Позиция" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="col-xs-2">
        <button id="add_menu" type="button" class="btn btn-primary">Добавить</button>
    </div>
</div>


<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#add_menu').click( function() {
            $.ajax({
                type: 'POST',
                url: '/administrator/menu/add_menu',
                data: (
                'name_menu=' + $('#name_menu').val() + '&' +
                'class=' + $('#class_menu').val() + '&' +
                'position=' + $('#position_menu').val()
                ),
                success: function(data){
                    alert(data);
                }
            });
        });


        $('#filter_pos').keyup( function() {


            $.ajax({
                type: 'POST',
                url: '/administrator/menu/filter',
                data: (
                'filter=' + $('#filter_pos').val()
                ),
                success: function(data){
                    $('#all_rows').html(data);
                }
            });





        });



    });
</script>

<?php echo $this->render('footer.html',$this->mime,get_defined_vars()); ?>