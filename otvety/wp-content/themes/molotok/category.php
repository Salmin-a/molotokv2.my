<?php get_header(); ?>

<h1 class="cat"><?php echo single_cat_title('', false); ?></h1>

<div class="add_post">
	<a href="/otvety/mastera/">Задать свой вопрос</a>
</div>

<?php get_template_part('loop', 'category'); ?>

<div class="add_post">
	<a href="/otvety/mastera/">Задать свой вопрос</a>
</div>

<?php get_footer(); ?>
