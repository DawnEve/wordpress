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
define('DB_NAME', 'wp');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WXEd-z$k$<+}BlG-PX?T-{M2[A+de@lJ(osW%]AePKzyQw$ OUI$%)jStiN+k(e{');
define('SECURE_AUTH_KEY',  'GrOIkd::0$Uo6ZkH!Hp(4]f>m!-%,[_IMIiLqn$KOfcm@B!YHHK|h>f[8HiTTg**');
define('LOGGED_IN_KEY',    '[}= vo-gkcl^uIGuG[lnm`<++#^^lf(|ezco+%e.VXbVM1Z|u%[Fb8``_uqGH3|:');
define('NONCE_KEY',        'fK^+u9?OSmXoL<d_I[zZtj+0:Gt_sV{# |WdzAq0QJhZrlp[+2pLMsLLmx C5^C+');
define('AUTH_SALT',        '<yLu{=rdaF%0oHd<QSiZd6E-=A-sk+v&yJVMf-rAcDsr H&_X rR|!G0Ae[d-(*C');
define('SECURE_AUTH_SALT', 'O4/u-+jV^1</To++ ;5m{J/NgIHEGeM! X^~vK7M<)dBLk)r%Z_|!G18#Ih&{Im,');
define('LOGGED_IN_SALT',   '8Ar@KZR;)m.p0QYCx+UQt/H.i&F.>hIY.$c87[i}$aT.y]QW]JX-[=I.Ku yNK*8');
define('NONCE_SALT',       'Jm4&yeb?w|^F|3Tx%%WOQ0brqyafHU5f}f@{0+gMzqq-EJ3:Hx:F$f:z)pv  vq%');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'cn_';

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

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');