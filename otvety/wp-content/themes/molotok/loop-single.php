<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h1>
	<?php the_title(); ?>
</h1>

<div class="single">
	<div class="entry-meta">
		<?php $tags_list = get_the_tag_list( '', ', ' ); ?>
		Тема: &laquo;<?php the_category('%title%'); ?><?php if ( $tags_list ): ?> (<?php echo $tags_list; ?>)<?php endif; ?>&raquo;
	</div>
	
	<div class="entry-content<?php echo !get_comments_number() ? ' nocomment' : ''; ?>">
		<?php the_content(); ?>
	</div>
	
	<?php comments_template( '', true ); ?>
	
	<?php endwhile; ?>
	
	<?php if (get_comments_number()) : ?>
	<div class="add_post">
		<a href="/otvety/mastera/">Задать свой вопрос</a>
	</div>
	<?php endif; ?>
	
	<fieldset class="curiosity">
		<legend>Читайте также</legend>
		<ul>
			<li>
				<?php previous_post_link('%link', '%title'); ?>
			</li>
			<li>
				<?php next_post_link('%link', '%title'); ?>
			</li>
		</ul>
	</fieldset>
</div>
