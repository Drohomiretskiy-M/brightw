<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'brightw');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?J5a*jdt43o5rnY/Z5/MWr#>TjZ,=2c6-Fl*a~{0~-x%e@q dCC0`Z;?}im*)t_n');
define('SECURE_AUTH_KEY',  'G3ssZ.uKGT0RG=?vnALmq1~|X[a/zi7CF=Gq,fof9E}r9*p!ZymKc9EHD+Cque[/');
define('LOGGED_IN_KEY',    'sR7Y0Jp,rN-L7{9z ycrnYta!a/z>?z)!7i%460`1vE)[p7d?*7=sN:LQncD&q-=');
define('NONCE_KEY',        'UAV|qx:E-&0IsueEebWGB5=m5j`L!2`3Zv;H_LGIevLJD*zi/h6*/jYVlRtnDi`<');
define('AUTH_SALT',        '&VnSu;e)qrs6i`F,2 9$ w~0U06X=tVSVU{>ws6^w;$*2lXAd;F52)^*dkV6;2F#');
define('SECURE_AUTH_SALT', 'z$hu=.wx`izS{#bQ.%EbONX!=Xn!swY~[>4MCH1)v~^h)D)gTgp@_=ewYWOr-%rw');
define('LOGGED_IN_SALT',   'Y/):(DRl5;U1vUbMAtoJFVB>y+9oG;9o Qs_%_g6RpgN5sdzCC&tCtEvQm[W;1% ');
define('NONCE_SALT',       'y8MJF7DC0WSAA-6zf~8jymH5y_]vYUS=2i*/h<2B<;.F%}q1y#hASZ)+ <y77p@v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
