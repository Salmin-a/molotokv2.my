<div class="review<?php echo ($data->recommend)? ' recommend' : null; ?>">
    <div class="item">
    	<?php echo Review::ratingStars($data->rating); ?>
        <div class="details">
       		<?php echo CHtml::encode($data->review); ?>
       	</div>
       	<?php if ($data->recipe->getFileUrl() || $data->youtube_link) : ?>
		<br />
		<?php endif; ?>
		<?php if ($data->recipe->getFileUrl()) : ?>
		<?php echo Review::imageLink($data->recipe, 'Скан отзыва', 'nyroModal document'); ?>
		&nbsp;
		<?php endif; ?>
		<?php if ($data->youtube_link) : ?>
		<?php echo Review::youtubeLink($data->youtube_link, 'Видео', 'nyroModal video') ?>
		<?php endif; ?>
    </div>
    <div class="nav">
        <div>
            <span class="author"><?php echo CHtml::encode($data->author); ?></span>
            <span class="date"><?php echo Yii::app()->dateFormatter->format("d MMM y",strtotime($data->date)); ?></span>
            <span class="link"><a href="<?php echo $this -> createUrl('review/read', array('slug' => $data -> slug)); ?>">Ссылка на отзыв</a></span>
        </div>
    </div>
    <br class="clear" />
</div>
