<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpadmin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'wpadmin');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FPetxf_B1sx0B7,FpBEq)k[,-s~ry4Q@%AF^TKSi.n?qO:WfIkREqH2 }nJ#_mkH');
define('SECURE_AUTH_KEY',  '=Z?&tBA`NT_fS%z|Q@^QZ*K|-MEBOMH*^@ 47-eu[MZ^5WxBad_x`!WdY}|%qDlX');
define('LOGGED_IN_KEY',    'k]R]f2{&t]O*oX%~.#gZ#)dRpDl~%ks[ _WH`!9*9|}!-R^T(.d-9RqNnF p)>iV');
define('NONCE_KEY',        '$K/|f~:A:;fKj.E1x1;<gFzDIf7c#?g`pMMS4CB5GxQspVye99Bi<<CjO3GZC.()');
define('AUTH_SALT',        'o[fmkm^Rm[trd_n dPG5hm1;v.]~wi#lAUEWQZKTvgGJPf[X6&$aXYa.;HEL|S/&');
define('SECURE_AUTH_SALT', 'c;1ilT(Br:UkrX;(Tv3XO/H{]_.qfR}+>7WzFjE~Q[Ipk_m.emX6_/;(^!N3_uF2');
define('LOGGED_IN_SALT',   'u<$7f~z`jW^:{ECH}3ey]Fq2Ksl[Y?,6qH?omgm8NqRBi2U6}bVDTW!1T&><O[<C');
define('NONCE_SALT',       'f#,1P{R&x86@>p0_tC]jE=>d*gX^u,TK7z{>ZUt1dW.J,4l].1}YVe1J~ 6k)g]O');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'study_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

