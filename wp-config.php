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
define('DB_NAME', 'wpm1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'djuice');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{/e0:OxLftM:e[P]P[L4 00+u=[yz.qBn@sS85xBU (o`<L+8>M}T~/4NoYk8i$m');
define('SECURE_AUTH_KEY',  'hIcc4/BBxPR^3p<5lvDXYV~%g3&{ba$`eUU#PnaUYC,i-O@!6h6Yv8@UX&-s]ut6');
define('LOGGED_IN_KEY',    'h0yF4#ei|0mN$MFuFY!-&an/R%>l>+Hua7G|4C]$I`%sT>Gi]r=$MpBy+Hx^mdXq');
define('NONCE_KEY',        '.Kfz>YP}V+sopUi+!AWM&_E}j`S)0sb2,6?h@:PtFMa i~>]#?z_bT ,{BXqN>g#');
define('AUTH_SALT',        '@XMM&9C~2ya(HO6u8*}S={rma4Bq]C7<b:mt2v0JGd0idOu(vZRkz3+6xcL^s1Pw');
define('SECURE_AUTH_SALT', 'O_F+pSbScnTD8XK7AllMBe^t(hQ$,>)>[eXO/|VydiD{mopvWINccLOCgY.Qq2WY');
define('LOGGED_IN_SALT',   '4{kWO4c9J(xd30V:v+0de46Z|T9nom^as|s5XCT*0A!77IMjLFv^L73c-[[A&^@`');
define('NONCE_SALT',       'Y2:G06Y-.6IZ{G 9;Y]/;*z=Wn4Q0v#a^Mt<=Q46rsv6K[+rGK`y,NmqE.prr/T`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpm1_';

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
