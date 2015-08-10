<?php

if (isset($_POST['project'])) {
	preg_match('/([a-zA-Z0-9-.]+)/', $_POST['project'], $matches);
	$name = $matches[1];
	$file = 'projects/' . $name . '.php';
	if (is_file($file)) {
		require $file;
	}
}
