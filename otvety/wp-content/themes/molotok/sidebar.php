<div class="block">
<div class="pages">
<h3>Темы</h3>
<ul class="services">
	<?php
	$categories = get_categories();
	foreach ($categories as $category) {
		if ($category -> cat_ID == $wp_query -> query_vars['cat']) {
			echo '<li>' . $category -> cat_name . '</li>';
		} else {
			echo '<li><a href="/otvety/tema/' . $category -> category_nicename . '">' . $category -> cat_name . '</a></li>';
		}
	}
 ?>
</ul>
</div>
</div>
