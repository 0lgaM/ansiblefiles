<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'base_1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'user_1' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'passwd' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'docker-database-1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M>gq E#N,F =F,4Vy=%spCq@# u.kB-7[ `F^4TEHkk_;&c+n#(N>RMj`?Lq,JlT' );
define( 'SECURE_AUTH_KEY',  't?} b6/7Dlb5W<;W,Sq4-Z5 9tafnhf(G<6}>,_b1G:^+{3O)eEQKQ?:&_jlbOzK' );
define( 'LOGGED_IN_KEY',    'B:OCVD##O))&mtEd6x]VT#%:#9XhvCBkE6`F)QM;A,tSvbHpAn%oZ,U|t]Xlj_}p' );
define( 'NONCE_KEY',        ' W^sq(U2+s;$}o?yBTlagD=y*(|8e:}pMfbwMAyRFO&WIK&0!X} j5M%8]Tjl>IG' );
define( 'AUTH_SALT',        '^}@|HeeDx$k[nWG>Du-.@t`pW$^)@3#C6$BWxP7/a6?p!Wb;lF ^z{s<(LShXu<f' );
define( 'SECURE_AUTH_SALT', '@sib@K4`TZu^(oGzEEr9XUjfs2xn3Ciwo|L(<vW]}WD13rVmMGM^U1K!hYeGzL[k' );
define( 'LOGGED_IN_SALT',   'z/V?fB611+~^R)ay0EAtwFJTea2&//f#t~(xeuX oR/J)0G/,T@)}<$c-4;`pu,2' );
define( 'NONCE_SALT',       '`mWQF;[,dR!3F9Xa[ }^8~Qd#!5dy/IBFO8 BSBx;Jng6p!%4w5w9/)cEZv1.;D1' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';


