<?php
get_header(); ?>
 
		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					echo 'Вопросы с меткой &laquo;' . single_tag_title( '', false ) . '&raquo;</span>';
				?></h1>
<div class="add_post">
	<a href="/otvety/mastera/">Задать свой вопрос</a>
</div>
<?php

get_template_part( 'loop', 'tag' );

?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
