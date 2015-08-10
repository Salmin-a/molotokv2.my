<?php
$this -> pageTitle = 'Управление отзывами';
$this -> breadcrumbs = array(
	'Отзывы' => array('index'),
	'Управление'
);

$this -> menu = array( array(
		'label' => 'Добавить',
		'url' => array('create')
	));
?>

<h1>Управление отзывами</h1>
<?php
Yii::app() -> clientScript -> registerScript('reinstallDatePicker', "
function reinstallDatePicker(id, data) {
$('#Review_date').datepicker({'language':'ru','format':'yyyy-mm-dd','autoclose':'true','weekStart':1,'startView':'month','keyboardNavigation':true,'id':'datepicker'})
}
");
?>
<?php

$this -> widget('bootstrap.widgets.TbGridView', array(
	// 'type' => 'striped bordered',
	'id' => 'review-grid',
	'dataProvider' => $model -> search(),
	'filter' => $model,
	'afterAjaxUpdate' => 'reinstallDatePicker',
	'columns' => array(
		'author' => array(
			'type' => 'html',
			'name' => 'author',
			'value' => 'CHtml::link($data->author, Yii::app()->controller->createUrl("update", array("id"=>$data->id)))'
		),
		array(
			'name' => 'date',
			'filter' => $this -> widget('application.components.was.WasDatepicker', array(
				'model' => $model,
				'attribute' => 'date',
				'options' => array(
					'language' => 'ru',
					'format' => 'yyyy-mm-dd',
					'autoclose' => 'true',
					'weekStart' => 1,
					'startView' => 'month',
					'keyboardNavigation' => true
				),
				'htmlOptions' => array('value' => '')
			), true),
			'htmlOptions' => array('style' => 'white-space:nowrap')
		),
		array(
			'type' => 'html',
			'name' => 'rating',
			'value' => 'Review::ratingStars($data->rating)',
			'filter' => Yii::app() -> params['rating'],
			'htmlOptions' => array('style' => 'white-space:nowrap')
		),
		array(
			'name' => 'status',
			'type' => 'raw',
			'value' => function($data) {
				return '<span class="label' . (!$data -> status ? ' ' : ' label-success') . '">' . Yii::app() -> params['status'][$data -> status] . '</span>';
			},
			'filter' => Yii::app() -> params['status']
		),
		array(
			'header' => 'Фото',
			'value' => '$data -> recipe -> getFileUrl() ? "есть" : "нет"'
		),
		array(
			'header' => 'Видео',
			'value' => '$data -> youtube_link ? "есть" : "нет"'
		),
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}'
		)
	)
));
?>

