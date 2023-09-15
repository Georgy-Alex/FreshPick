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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test_ground' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin_elementor' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Amateur_pioneer2444' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ts~BF#a(#Pa aA<cUCFm7i~h,oX3S&tZ~:L[4XjZ gM-R=I0(|#zwP,I#V,P6wq;' );
define( 'SECURE_AUTH_KEY',  '<EVfNxK)}(^GWy2p~{D:aT~^=d#,GJn)v(mxHz,B|ReS7v/FfXfzW||0&.$Lerq{' );
define( 'LOGGED_IN_KEY',    'C@d}vmhL|Ll|i>}2= :@zTbwiD0 %A.wNJ)C|k=[WNF?8txT OZ[236XwI0w0,K!' );
define( 'NONCE_KEY',        '#u^qeM2G:rU7jw8yu80qf!bX-uS#KqiaYqnB2KN9<yvt`=mni=r1)VW)v#rV:d=a' );
define( 'AUTH_SALT',        '-j;q<kXw*4-mskC~kizY5^lBaLy9c:s&E}C<fX{6NNWEt^+AhlD#w3Xgh|A&ttGu' );
define( 'SECURE_AUTH_SALT', '7&DCyy.x`A%VcHe?GWk(<lZi_sz%$+EJ#acX1ckXGZ7PdLu.xUCKd0g[/bW/v$Oq' );
define( 'LOGGED_IN_SALT',   '7Q8S/FWi!<sZ7/kXHzH<M$wK_oZf%aAO3f?FM!#wD.~#%d(EWD~.j4fL_*%+I]7?' );
define( 'NONCE_SALT',       '*y@FI*Jh:DRYF^T*7 <)Y T5fJX`ii#z1PK>gVQ#=d G[M}$s]&B%r;PoR$M-PV%' );

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
