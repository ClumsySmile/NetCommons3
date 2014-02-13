<?php
/**
 * PageThemeFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for PageThemeFixture
 */
class PageThemeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ページテーマ情報ID（ページ設定->ページテーマ）'),
		'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カテゴリわけしたい場合に使用（未使用）'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
		'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
		'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
		'theme_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'テーマ名', 'charset' => 'utf8'),
		'temp_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'テンプレート名（未使用）', 'charset' => 'utf8'),
		'center_theme' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'センターカラムテーマ名', 'charset' => 'utf8'),
		'header_theme' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'ヘッダーカラムテーマ名', 'charset' => 'utf8'),
		'left_theme' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'レフトカラムテーマ名', 'charset' => 'utf8'),
		'right_theme' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'ライトカラムテーマ名', 'charset' => 'utf8'),
		'footer_theme' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'フッターカラムテーマ名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'scope' => 1,
			'type' => 1,
			'lang' => 'Lorem ip',
			'space_type' => 1,
			'page_id' => 1,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'scope' => 2,
			'type' => 2,
			'lang' => 'Lorem ip',
			'space_type' => 2,
			'page_id' => 2,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'scope' => 3,
			'type' => 3,
			'lang' => 'Lorem ip',
			'space_type' => 3,
			'page_id' => 3,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'scope' => 4,
			'type' => 4,
			'lang' => 'Lorem ip',
			'space_type' => 4,
			'page_id' => 4,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'scope' => 5,
			'type' => 5,
			'lang' => 'Lorem ip',
			'space_type' => 5,
			'page_id' => 5,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'scope' => 6,
			'type' => 6,
			'lang' => 'Lorem ip',
			'space_type' => 6,
			'page_id' => 6,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'scope' => 7,
			'type' => 7,
			'lang' => 'Lorem ip',
			'space_type' => 7,
			'page_id' => 7,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'scope' => 8,
			'type' => 8,
			'lang' => 'Lorem ip',
			'space_type' => 8,
			'page_id' => 8,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'scope' => 9,
			'type' => 9,
			'lang' => 'Lorem ip',
			'space_type' => 9,
			'page_id' => 9,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'scope' => 10,
			'type' => 10,
			'lang' => 'Lorem ip',
			'space_type' => 10,
			'page_id' => 10,
			'theme_name' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'center_theme' => 'Lorem ipsum dolor sit amet',
			'header_theme' => 'Lorem ipsum dolor sit amet',
			'left_theme' => 'Lorem ipsum dolor sit amet',
			'right_theme' => 'Lorem ipsum dolor sit amet',
			'footer_theme' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:36',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:36',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
