<?php
/*
 Plugin Name: Molot Feedback
 Version: 1
 Author: Zyatev, E. L.
 Author URI: http://zyat.pro
 Description: A simple front end post form for all users
 Text Domain: molot_feedback
 License: GPL2
 */

if (!session_id()) {
	session_start();
}

add_filter('widget_text', 'do_shortcode');

function stip_shortcode() {
	$deny = '';

	$dropdown_cats_args = array(
		'hide_empty' => 0,
		'echo' => 0,
		'show_count' => 0,
		'hierarchical' => 1,
		'name' => 'category'
	);

	if (!empty($_POST['save'])) {

		$secure_pattern = '/([\&;\`\'\\\|"*~<>^\[\]\{\}\$\r])/';

		$_POST['visitor'] = preg_replace($secure_pattern, '', $_POST['visitor']);
		$_POST['content'] = preg_replace($secure_pattern, '', $_POST['content']);
		$_POST['phone'] = preg_replace($secure_pattern, '', $_POST['phone']);
		$_POST['email'] = preg_replace($secure_pattern, '', $_POST['email']);

		$success = '';
		$error = array();
		$error['visitor'] = empty($_POST['visitor']) ? '<div class="error">Нужно обязательно указать имя.</div>' : false;
		$error['content'] = empty($_POST['content']) ? '<div class="error">Нужно обязательно написать вопрос.</div>' : false;
		$error['email'] = !empty($_POST['email']) && !preg_match('/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})/i', $_POST['email']) ? '<div class="error">Пример правильного e-mail: alexander@pushkin.ru</div>' : false;
		$error['phone'] = !empty($_POST['phone']) && !preg_match('#\(\d{3}\)\s\d{3}\-\d{2}\-\d{2}#i', $_POST['phone']) ? '<div class="error">Номер должен соответствовать формату: (123) 456-78-90</div>' : false;

		if (!in_array(true, $error)) {

			if (isset($_SESSION['post_allowed']) && !$_SESSION['post_allowed']) {
				$deny = '<div class="error"><h2>Вы уже отравляли этот вопрос.</h2></div>';
			} else {
				$_SESSION['post_allowed'] = false;

				$post_args = array(
					'post_title' => strip_tags(cut_paragraph(apply_filters('the_content', $_POST['content']))),
					'post_content' => apply_filters('the_content', $_POST['content']) . '<em>' . apply_filters('the_visitor', $_POST['visitor']) . '</em>',
					'post_status' => 'pending',
					'post_author' => $userID,
					'post_visitor' => apply_filters('the_visitor', $_POST['visitor']),
					'post_category' => array($_POST['category'])
				);

				if (wp_insert_post($post_args)) {
					require 'notify.php';
					$success = '
					<div class="success">
						<h2><strong>Спасибо, специалист ответит на ваш вопрос в порядке очереди.</strong></h2>
						<br />
						<p>Если вы хотите, чтобы вопрос был рассмотрен во внеочередном порядке, проголосуйте за нас с помощью следующей кнопки:</p>
						<br />
						<div id="vk_like"></div>
						<script type="text/javascript">
						VK.Widgets.Like("vk_like", {type: "button", height: 24});
						</script>
					</div>
					';
				}

			}
		}

	} else {
		$_SESSION['post_allowed'] = true;
	}

	$return = '<div class="molot-feedback">';
	$return .= '
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?63"></script>
		<script type="text/javascript">
  		VK.init({apiId: 3237840, onlyWidgets: true});
		</script>';
	$return .= $success;
	$return .= $deny;

	if (!$success && !$deny) {
		$return .= '<form action="#stip-message" method="post" class="stip-form">';
		$return .= '<div class="stip-box"><h2>Ваше имя *</h2><input type="text" name="visitor" size="90" value="' . $_POST['visitor'] . '" /></div>' . $error['visitor'];
		$return .= '<div class="stip-box"><h2>Интересующий вопрос *</h2><textarea name="content" rows="7" cols="70">' . $_POST['content'] . '</textarea></div>' . $error['content'];
		$return .= '<div class="stip-box"><h2>Контактный телефон </h2><input type="text" name="phone" size="90" value="' . $_POST['phone'] . '" /></div>' . ((!$error['phone']) ? '<small>Укажите, если хотите, чтобы мастер дал ответ по телефону.</small>' : $error['phone']);
		$return .= '<div class="stip-box"><h2>Эл. почта</h2><input type="text" name="email" size="128" value="' . $_POST['email'] . '"/></div>' . $error['email'];
		$return .= '<div class="stip-box"><h2>Тема вопроса</h2>' . wp_dropdown_categories($dropdown_cats_args) . '</div>';
		$return .= '<div class="stip-box"><input onclick="_gaq.push([\'_trackEvent\', \'FAQ\', \'Question\', \'MSK\']);" type="submit" class="submit" value="Спросить мастера" /><br></div>';
		$return .= '<input type="hidden" name="save" value="true" />';
		$return .= '</form>';
	}

	$return .= '</div>';
	return $return;
}

add_shortcode('molot_feedback', 'stip_shortcode');
