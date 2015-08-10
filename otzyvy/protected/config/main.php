<?php

Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');

return array(
	'theme' => 'bootstrap', // requires you to copy the theme under your themes directory

	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Отзывы',

	'homeUrl' => array('review/index'),

	'language' => 'ru',

	// preloading 'log' component
	'preload' => array('log'),

	'defaultController' => 'frontend/review/index',

	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
	),

	'modules' => array(
		'frontend' => array('layoutPath' => 'protected/modules/frontend/views/layouts', ),
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'generatorPaths' => array('bootstrap.gii', ),
			'password' => 'i23613',
			'ipFilters' => array(
				'94.230.0.138',
				'::1'
			),
		),
	),

	// application components
	'components' => array(
		'bootstrap' => array('class' => 'bootstrap.components.Bootstrap', ),
		'user' => array(
			// enable cookie-based authentication
			'allowAutoLogin' => true, ),
		// uncomment the following to enable URLs in path-format
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				'admin/' => 'review/index',
				'admin/<controller:\w+>/<id:\d+>' => '<controller>/view',
				'admin/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'admin/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				's/<s:\d+>' => 'frontend/review/index',
				'ajax/<ajax:\w+>/s/<s:\d+>' => 'frontend/review/index',
				'ajax/<ajax:\w+>/' => 'frontend/review/index',
				'<slug:[a-zA-Z0-9_,-]+>' => 'frontend/review/read',
			),
		),
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=molotok-na-chas_reviews',
			'emulatePrepare' => true,
			'username' => 'molotok-na-chas',
			'password' => 'm8U2E6XMfwRXrf7c',
			'charset' => 'utf8',
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array( array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				 array(
				 'class'=>'CWebLogRoute',
				 ),
				 */
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => array(
		'rating' => array(
			5 => 'Отлично',
			4 => 'Хорошо',
			3 => 'Средне',
			2 => 'Плохо',
			1 => 'Ужасно',
		),
		'status' => array(
			'ожидает',
			'одобрен'
		),
		'imagesPath' => '/otzyvy/images/',
		'relativeWebRootPath' => 'files/recipes',
		'youtubeLinkPattern' => 'http://youtube.com/embed/{ID}?rel=0',
		'otherLimit' => 10
		//'adminEmail'=>'zyatev@molotok-na-chas.ru',
	),
);
