<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'molotok');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W+~6.`+U) [f|`jt-D?6^vZjWT` jCc}),_?Zn#/l>u*)_`qM+a^[W{JWzV5k07M');
define('SECURE_AUTH_KEY',  '|!G^m`2m0 2>4|ZetEu2.MwbHph__aCxBO]^4FL8e~?QU|?Y>+X@~{tm~OI--dNp');
define('LOGGED_IN_KEY',    '.0?L::iJZ<3c.9CRd-oNe|~r^]9]80||Q%s%[A4kOQ0<nO09Tqe*dr #:8[%$snF');
define('NONCE_KEY',        'vi{+?K)F_+gx#&aC1YVwdUA56,Vq$rF#kCRKzy(4>$%b^n1%FOx;{oFF4s3;KAS7');
define('AUTH_SALT',        'KH|fV*y($G_:WL*$Cn0-&[cQL)$~yUXqc2|l8~fjPkMER)W)VNmcQFJdk,m8I{&#');
define('SECURE_AUTH_SALT', 'cMQ@X?;K;)wHvDP4MCpCCZ~Y6gR$ba>G0R_A:3ufvaT#g/Ag+mg2-;d84*gaM+3 ');
define('LOGGED_IN_SALT',   'RRf$x9f?#,s){ X2mFxVp0;j_IW8y--V`117-uz3FH{{S->)PsKlFCYPM!R9W4($');
define('NONCE_SALT',       '8XX@rC~25|Mo%L_Rzm+||R|ZD-!|$pmPhd#V9kDkl]c;b+Y^wa<NG1%$Z~}_9(7J');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'molot_wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
