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
define('DB_NAME', 'm-master');

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
define('AUTH_KEY',         'J&X_!n;#cEEfV[Z3VNz2Bz}|-wf-cNh?u%FI|GQ*~Twb*7tGyXy:{$!UmkmbtPI#');
define('SECURE_AUTH_KEY',  'wQ E#9XAEBI:yQND!3q7)iLt&L=U~bkYu?Fotes|JVX(7}vlw (~69pzh#^L1]&!');
define('LOGGED_IN_KEY',    'H:Z5~#y 2*gizAknKIFeu}eL#OohZPN{{5tGO8ZZnKssb=sVUiP+;Jfw(vk$-+H%');
define('NONCE_KEY',        'KbdTVhsE*V9uo|Z~>Z5uZ2`,D,d_9u(^3Zi]-Y*Ekw_r6QPRLh|)SCwpF}K|k^)w');
define('AUTH_SALT',        '= sWJKzva.a(D{,L-`&b5Rtkm+`kyLr=t,5<$t!$>/nzKU?)BQB@w|F99rbD.vB=');
define('SECURE_AUTH_SALT', '6Wew+ki%o~igR:j_os.c9^l+U]uU,DI:(& kWmlDWc/I]kKCC`/]XWYn?M#RfV$B');
define('LOGGED_IN_SALT',   '%TOk_5}pjw1K0Pj#_h558I]ACo64X!_UTXgF1%|riNH*>/&z83&)dQ4ZT)|1=/F>');
define('NONCE_SALT',       'LIK2sY;C?L g(71%=An^a/eMq,VCQ0>uTV!0YUzRCzmz%6O{g3N?^WeAh^z?WQ=h');

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
