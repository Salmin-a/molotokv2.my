<?php if ( ! have_posts() ) : ?>
	<div>
		<h1>Ответы на вопросы не найдены</h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
		</div>
	</div>
<?php endif; ?>

<?php $postCount = 0; ?>
<?php while ( have_posts() ) : the_post();  ?>
<?php $postCount++; ?>
		<div class="loop-question<?php echo ($postCount == sizeof($posts)) ? ' last' : ''; ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-meta">
		<?php $tags_list = get_the_tag_list( '', ', ' ); ?>
		Тема: &laquo;<?php echo get_the_category_list(', '); ?><?php if ( $tags_list ): ?> (<?php echo $tags_list; ?>)<?php endif; ?>&raquo;
	</div>
	<?php if ( is_archive() || is_search() ) :  ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
	<?php else : ?>
			<div class="entry-content">
				<?php the_content('Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten'); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</div>
	<?php endif; ?>

	<?php if (is_user_logged_in()) : ?>
		<span class="comments-link"><?php comments_popup_link('Ответить', ''); ?></span>	
	<?php endif; ?>
	<?php comments_template( '', true ); ?>
	</div>
<?php endwhile;  ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link('<span>&lsaquo;</span> Назад'); ?></div>
		<div class="nav-next"><?php previous_posts_link('Вперед <span>&rsaquo;</span>'); ?></div>
		<br class="clear" />
	</div>
<?php endif; ?>
