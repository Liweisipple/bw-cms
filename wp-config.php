<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wp2' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'Liweisipple' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'trebd1qwe' );

/** MySQL主机 */
define( 'DB_HOST', '139.196.27.82' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fdB-.qjwJ*^Qy/!NOD0&cJ}Dbr$/p,8Y-<J*|VAR%n[i/u?<?/IJ~TyZ3Dg_|wwK' );
define( 'SECURE_AUTH_KEY',  '3C-Al<Xv72Tok0xsgQt_&)?t@gtA]1[6eT/Jcxp|RxRX&=g&q|TV/>e}:)&^lNI_' );
define( 'LOGGED_IN_KEY',    'ek1|VJee|cnp|zI<og@Cbf//tdK<L-~yb*+c-)Tf6APR c}/D|Mq3lE,Zn<kNqd_' );
define( 'NONCE_KEY',        '>T|>Io+5<)3}l9OS+2_0nU~vtnfT0BxWd1QLrA6kTt]uh99b~8#Xlg6N9gAKG(H!' );
define( 'AUTH_SALT',        'C@P^qI53=O=>>[3) OvplfV3lg FMt3#v:.E%wbw-UamkFe1>dv-}3A(j2zUL;pU' );
define( 'SECURE_AUTH_SALT', 'x6,~[,!#&0`3[*95HaE]O[!Cb(>!-Ge68`)&8g&5XME]*:tfhqP/`L@:_20nB)&<' );
define( 'LOGGED_IN_SALT',   '@LXWexk,$@?%Bv:<09p@(0$]/7eK y:*.SN}e(lL23PBW=Qg<HRJl0?4H*l{?&Jf' );
define( 'NONCE_SALT',       '_5wB9BUp}RgcD0}(j`Oj&Wo@Dr,F/PX;_koQWB,$p}RTMq:Of?)Dln@gLHRl]mb9' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
