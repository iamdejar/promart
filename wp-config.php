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
define( 'DB_NAME', 'promart' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>H631xA5(J+$p/R$lj:Y2HCfhq|UK~M,A-7Y  #&&{6G,F!4I~rK}0_I]z!5{k}.' );
define( 'SECURE_AUTH_KEY',  'jk@t6i`t$,/V+kI0wbrjBc(e<-x^g?P)>IZ,|B|Y&GK,/43@AUPbK)lEstx+0hzS' );
define( 'LOGGED_IN_KEY',    'vH=#9!9IBHjJ(uqRg>cs%>~b!:J@Yr5HCtGS<.<;.z]IduMHYp5YA}vIN!G^e`$t' );
define( 'NONCE_KEY',        ',GTJW`Kb Xu?7hU=kcx/n{aocAw?^uiV2D@elojJdqc=DUVy&XsvHZ}tgXqH^1@_' );
define( 'AUTH_SALT',        'eP6Uf{b}mtCHsCOnx(uQT2~<,7CSTr6zW$F([AMQ!6CW)9B:hB/WYue>wie,9D+K' );
define( 'SECURE_AUTH_SALT', 'NCmA~S!Fm!ljLt<gIZOQ>@V<Ce2T^>)drgJ;L{xb&jRKk.+gIW+DO?[mRk=J79$X' );
define( 'LOGGED_IN_SALT',   'R-bXFT_7F^hO|g;e`vq|;@yF,,1C^+k]qfKgl[RR%-U!ywHKHa<Dk7a|u#EIX[]U' );
define( 'NONCE_SALT',       '(2E$q !wS!F63};LqiL_sgOJrJjQx|x3g<Bd f*15$)oX6|q6$kQwnarp,9e{$&L' );

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
