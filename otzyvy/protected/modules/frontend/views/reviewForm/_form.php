<?php

Yii::app() -> clientScript -> registerScript('addReview', "
$('a.add_review').click(function(){
        $('#review-form').show();
       	$(this).remove();
        return false;
});

");

$form = $this -> beginWidget('CActiveForm', array(
	'id' => 'review-form',
	'enableClientValidation' => true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
		'ajaxVar' => 'ajax',
		'afterValidate' => "js: function(form, data, hasError) {
			if (!$('#review-form input[name=blackout]').length)
            	$('#review-form').append('<input type=\"hidden\" name=\"blackout\" value=\"j8wkw_293\"/>')        	
            if (!hasError && $('#review-form input[name=blackout]').length) {
              $.ajax({
                type: 'POST',
                url: '/otzyvy/frontend/reviewForm/post',
                data: $(form).serialize(),
                success: function(ret) {
                  $('#review-form input[type=text], #review-form textarea').val('');
                  $('#review-form input[type=checkbox]').attr('checked', false);
                  alert('Спасибо, отзыв отправлен модератору');
                }
              });
            } else {
            	alert('Не удается отправить отзыв. Проверьте, заполнены ли поля, отмеченные знаком *, и не ошиблись ли вы при вводе адреса эл. почты.');
            }
            return false;
        }
        "
	)
));
?>
<h2>Оставить отзыв</h2>
<table>		
	<tr>
		<td class="author">
			<?php echo $form -> labelEx($model, 'author'); ?>
			<?php echo $form -> textField($model, 'author'); ?>
			<?php $form -> error($model, 'author'); ?></td>
		<td>
			<?php echo $form -> labelEx($model, 'email'); ?>
			<?php echo $form -> textField($model, 'email'); ?>
			<?php $form -> error($model, 'email'); ?></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo $form -> labelEx($model, 'review'); ?>
			<?php echo $form -> textArea($model, 'review'); ?>
			<?php $form -> error($model, 'review'); ?>
		</td>
	</tr>		
	<tr>	
		<td>
			<?php echo $form -> labelEx($model, 'document_no'); ?>
			<?php echo $form -> textField($model, 'document_no'); ?>
			<?php $form -> error($model, 'document_no'); ?>
		</td>
		<td></td>
	</tr>
	<tr>
		<td class="rating" colspan="2">
			<?php echo $form -> labelEx($model, 'rating'); ?>
			<?php echo $form -> radioButtonList($model, 'rating', Yii::app() -> params['rating'], array(
					'separator' => ' ', 'labelOptions' => array('class' => 'switch')
				), array('options' => array($model -> rating => array('selected' => true))));
 			?>
		</td>
	</tr>
	<tr>	
		<td class="recommend">
			<?php echo $form -> checkBox($model, 'recommend'); ?>
			<?php echo $form -> label($model, 'recommend', array('class' => 'switch')); ?>
			<?php $form -> error($model, 'recommend'); ?>
		</td>
		<td></td>
	</tr>			
	<tr>
		<td colspan="2"><?php echo CHtml::submitButton('Отправить отзыв', array('class' => 'submit')); ?></td>
	</tr>	
</table>
<?php $this -> endWidget(); ?>
</form>
