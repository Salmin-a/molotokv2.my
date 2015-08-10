<?php
Yii::app() -> clientScript -> registerCoreScript('jquery');
Yii::app() -> clientScript -> registerCss(1, '.top-buffer{margin-top:10px;}.editor{height:29.32em}.recommend input{margin-right:6px !important}');
?>

<div class="row">
	<?php $form = $this -> beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id' => 'review-form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array(
			'class' => 'span9',
			'enctype' => 'multipart/form-data'
		)
	));
	?>
	<?php //echo $form -> errorSummary($model); ?>
	<p class="help-block">
		Поля, отмеченные <span class="required">*</span>, обязательны.
	</p>
	<div class="row">
		<div class="span3">
			<?php echo $form -> labelEx($model, 'slug'); ?>
			<?php echo $form -> textField($model, 'slug', array(
					'class' => 'span3',
					'maxlength' => 30
				));
			?>
			<?php echo $form -> labelEx($model, 'date'); ?>
			<?php $this -> widget('application.components.was.WasDatepicker', array(
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
					'htmlOptions' => array(
						'maxlength' => 10,
						'class' => 'span3',
						'value' => $model -> date
					)
				));
			?>
			<?php echo $form -> labelEx($model, 'author'); ?>
			<?php echo $form -> textField($model, 'author', array(
					'maxlength' => 64,
					'class' => 'span3'
				));
			?>

			<?php echo $form -> labelEx($model, 'title'); ?>
			<?php echo $form -> textField($model, 'title', array(
					'class' => 'span3',
					'maxlength' => 150
				));
			?>

			<?php echo $form -> textFieldRow($model, 'email', array(
				'maxlength' => 128,
				'class' => 'span3'
			));
			?>
			<?php echo $form -> textFieldRow($model, 'document_no', array(
					'maxlength' => 128,
					'class' => 'span3'
				));
			?>
			<?php echo $form -> textFieldRow($model, 'youtube_link', array(
					'maxlength' => 11,
					'class' => 'span3',
					//'prepend' => 'http://yotu.be/',
					'hint' => 'Пример: <a href="#" rel="tooltip" title="Код из ссылки на видео: youtube.com/watch?v=7sKVo1m3ikU">7sKVo1m3ikU</a>'
				));
			?>
			<div class="row">
				<div class="span">
					<?php echo $form -> radioButtonListRow($model, 'rating', Yii::app() -> params['rating'], array('separator' => ' ', ), array('options' => array($model -> rating => array('selected' => true)))); ?>
				</div>
				<div class="span">
					<?php echo $form -> radioButtonListRow($model, 'status', Yii::app() -> params['status'], array('separator' => ' '), array('options' => array($model -> status => array('selected' => true)))); ?>
					<div class="form-inline top-buffer recommend">
						<?php echo $form -> checkBoxRow($model, 'recommend', array('uncheckValue' => 0)); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="span6">
			<?php echo $form -> textAreaRow($model, 'review', array(
				'class' => 'editor span6',
				'rows' => 21
			));
			?>
			<div class="row">
				<div class="span6">
					<?php echo $form -> labelEx($model, 'image'); ?>
					<?php
					$image = $model -> recipe -> getFileUrl('thumb');
					if ($image)
						echo CHtml::image($image . '?' . rand());
					?>
				</div>
			</div>
			<?php echo $form -> fileField($model, 'image'); ?>
			<?php if ($model->recipe->getFileUrl()) :
			?>
			<?php echo $form -> checkBoxRow($model, 'remove_image'); ?>
			<?php endif; ?>
		</div>

	</div>
	<div class="form-actions">
		<?php $this -> widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type' => 'primary',
			'label' => $model -> isNewRecord ? 'Добавить' : 'Сохранить'
		));
		?>
		<?php $this -> widget('bootstrap.widgets.TbButton', array(
				'buttonType' => 'reset',
				'label' => 'Сброс'
			));
		?>
	</div>

	<?php $this -> endWidget(); ?>
</div>
