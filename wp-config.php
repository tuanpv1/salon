<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'salon');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r%uL9~@a8@DP}5c>HSw4s)$4tm%`/{0TT`.nftERl%!7]&ip`$#c2I2>@5,i!)C)');
define('SECURE_AUTH_KEY',  '^>5v*Q4IWO>4n~K-bzH]x1wvz,iKJ?MNTY)F(B*#s0XN,yQd/:di1{wfo_BJs/_1');
define('LOGGED_IN_KEY',    'wm0/bcUsIsK?p;*zCOhM8:#ezU:3E`Q~H8*1T,e~Hj%x6Ns(Kp)KfYfvR62SGQ_d');
define('NONCE_KEY',        '2(C|u$^^&dp7GT-),ka9]0{D*oK|vAE3^-4xSN*}GNrf=BJ7zay`^mcf3Xevwsz>');
define('AUTH_SALT',        'P57lZF;vgB?LjVhKqkCr/Z2}TTa}.h4}*aUtFE8ZQk,i3-gjN#n q:Dn3HY|itPs');
define('SECURE_AUTH_SALT', 'M|+/4H{@4~ o5b~;5JO]k8[/cHNSXD6Uh_j#u(c@+-3{vzG)])Fth}Nc<AV?6~2]');
define('LOGGED_IN_SALT',   '7@adTOOBbDff{H3<fHj3:)@{:v6!9PhCGFz]~Ib?YQ+c3CH#139wd5%75dC)Ua6,');
define('NONCE_SALT',       'a3E:DqYwJGZ8uzRcOzrw`h.zE_PQAbf4#_ +-Q@!kBM@)Gry8_P_~;*^zL7;BeC5');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
