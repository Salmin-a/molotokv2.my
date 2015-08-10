<?php
$this -> pageTitle = 'Обновить отзыв #' . $model -> id;
$this -> breadcrumbs = array(
	'Отзывы' => array('index'),
	$model -> author => array('index' => array('view' => $model -> id)),
	'Обновить',
);

$this -> menu = array( array(
		'label' => 'Управление',
		'url' => array('index')
	), );
?>

<h1>Обновить отзыв #<?php echo $model -> id; ?></h1>

<?php echo $this -> renderPartial('_form', array('model' => $model)); ?>
