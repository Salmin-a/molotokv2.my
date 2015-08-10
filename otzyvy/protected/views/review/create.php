<?php
$this->pageTitle='Добавить отзыв';
$this->breadcrumbs=array(
	'Отзывы'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Управление','url'=>array('index')),
);
?>

<h1>Добавить отзыв</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
