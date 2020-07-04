<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KB{m]4Zy_~|ju%GbW!MDINZGL+EL]C$zSfLI?}Fq|$aKqAqtOA#x7=0o4c^;(r}m' );
define( 'SECURE_AUTH_KEY',  '/a5%=bH#x(*Oh]~;*1NW_Zm70/kM|v4iN3O,r&J*K*vE4ofw6aA5SN{lOm8BEVlB' );
define( 'LOGGED_IN_KEY',    'y}CSxf&ay#{ly_ Sa$JGv/AepT;,xezz4h&?j*^}u5?6xUd&rcI=AeYt1RWQ25wS' );
define( 'NONCE_KEY',        '1%)^v$#{Q&e?-?kj+*ZMj+)I;/!z&F08|jIdkAsF^;QgX<.F`{E,i(3Y`c&`oSIe' );
define( 'AUTH_SALT',        '$ZKwC&?-Q3_6mas+rtD.2@6R;OX87:8Zgij)$TW|`dak:W:uC.UnN}o18-B$#vO,' );
define( 'SECURE_AUTH_SALT', '_<:Xz>-(&_?y~#1zjrsXeKj!cN.&-(G/WJ+%(!QrH93^>2e:-$C3cI|}P%o0t3IM' );
define( 'LOGGED_IN_SALT',   'rXvG9qSnfFv^Rxz&zE?NNb&u{G#mk!P&2%`Om*%^JZgG xQp[ggl[QV%*RH}540r' );
define( 'NONCE_SALT',       '{66Y5.0,GUCyo_&a@A&N/nBJ{Q7wTp$KVw&=24HHIrdwvX2Ein086%yJ9_C].)7T' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
