<?php

$name = '';
$content = '';
$phone = '';
$email = '';

$secure_pattern = '/([\&;\`\'\\\|"*~<>^\[\]\{\}\$\r])/';

if (isset($_POST['visitor'], $_POST['content'])) {
	$_POST['visitor'] = preg_replace($secure_pattern, '', $_POST['visitor']);
	$_POST['content'] = preg_replace($secure_pattern, '', $_POST['content']);
	$name = $_POST['visitor'];
	$content = $_POST['content'];
}

if (isset($_POST['phone'])) {
	$_POST['phone'] = preg_replace($secure_pattern, '', $_POST['phone']);
	$phone = $_POST['phone'];
}

if (isset($_POST['email'])) {
	$_POST['email'] = preg_replace($secure_pattern, '', $_POST['email']);
	$email = $_POST['email'] = preg_replace($secure_pattern, '', $_POST['email']);
}

$message_post = 'Вопрос с сайта "РСК&nbsp;&laquo;Молоток&raquo;":\n\n';
$message_post .= $content;

$form['name'] = $name;
$form['phone'] = $phone;
$form['email'] = $email;
$form['message'] = $message_post;

if ($phone) {
	$cityId = '18413';
	$post = array();
	$post['cityID'] = $cityId;
	$post['siteID'] = '197';
	$post['clientName'] = $form['name'];
	$post['phone'] = $form['phone'];
	$post['message'] = 'Имя: ' . $form['name'] . '; ' . "\r\n" . 'Телефон: ' . $form['phone'] . '; ' . "\r\n" . 'Заказ услуг: ' . $form['message'] . '; ' . "\r\n" . 'Сайт: ' . $_SERVER['HTTP_HOST'] . ';';
	$post['address'] = '';
	$post['email'] = $email;
	$post['companyName'] = '';
	$post['infoSource'] = '';

	/* data */
	$data = '';
	$data .= 'email=' . $post['email'];
	$data .= '&message=' . $post['message'];
	$data .= '&phone=' . $post['phone'];
	$data .= '&clientName=' . $post['clientName'];
	$data .= '&companyName=' . $post['companyName'];
	$data .= '&address=' . $post['address'];
	$data .= '&infoSource=' . $post['infoSource'];
	$data .= '&siteID=' . $post['siteID'];
	$data .= '&cityID=' . $post['cityID'];

	/* server */
	$host = '217.67.177.154';
	$port = 84;
	$path = '/addOrder.php';

	/* socket */
	$output = '';
	$fp = fsockopen($host, $port);
	if ($fp) {
		fputs($fp, "POST " . $path . " HTTP/1.0\r\n");
		fputs($fp, "Host: " . $host . "\r\n");
		fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
		fputs($fp, "Content-length: " . strlen($data) . "\r\n");
		fputs($fp, "Connection: close\r\n");
		fputs($fp, "\r\n");
		fputs($fp, iconv('utf-8', 'windows-1251', $data));
		while (!feof($fp)) {
			$output .= fgets($fp, 1024);
		}
		fclose($fp);
	}

	/* id */
	if (strpos($output, iconv('utf-8', 'windows-1251', 'По Вашей заявке создано обращение под №'))) {
		$pos = strpos($output, '№') + 1;
		$id = substr($output, $pos, strlen($output));
	} else {
		$alert = 1;
	}
}

if ($name && $content) {
	/* mail */
	$mailto = 'questions@molotok-na-chas.ru';
	//$mailto = 'eu@zyat.pro';
	$subject = 'Заявка с сайта ' . $_SERVER['HTTP_HOST'];
	if ($alert == 1) {
		$mailto = 'callcenter@servicecomp.ru, ' . $mailto;
		$subject = 'Внимание!!! ' . $subject;
	}
	$headers = 'From: Robot<robot@' . $_SERVER['HTTP_HOST'] . '>' . "\r\n" . 'Content-Type: text/html; charset=windows-1251' . "\r\n" . 'Reply-To: robot@' . $_SERVER['HTTP_HOST'] . "\r\n";
	$message = '<html><head><title>' . $subject . '</title><style type="text/css">body, td {font-family: arial,sans-serif;font-size: 13px;text-decoration: none;color: #000000;} table{border-collapse:collapse;width:100%;} h1{font-family:arial,sans-serif;font-size: 18px;font-weight: normal;} td{border-bottom:1px solid #ccc; padding:5px 20px 5px 0;}</style></head><body>';
	$message .= '<h1>' . $subject . '</h1>';
	$message .= '<table>';
	$message .= '<tr><td><strong>Контактное лицо</strong></td><td>' . $form['name'] . '</td></tr>';
	if ($form['phone']) {
		$message .= '<tr><td><strong>Контактный телефон</strong></td><td>' . $form['phone'] . '</td></tr>';
	}
	$message .= '<tr><td><strong>Интересующий вопрос</strong></td><td>' . $form['message'] . '</td></tr>';
	if ($id) {
		$message .= '<tr><td><strong>Номер заявки в базе</strong></td><td>' . $id . '</td></tr>';
	}
	$message .= '<tr><td><strong>IP</strong></td><td>' . $_SERVER['REMOTE_ADDR'] . '</td></tr>';
	$message .= '</table></body></html>';

	$message = iconv('utf-8', 'windows-1251', str_replace('\n', '<br>', $message));
	$subject = iconv('utf-8', 'windows-1251', $subject);
	$headers = iconv('utf-8', 'windows-1251', $headers);

	mail($mailto, $subject, $message, $headers);
}
