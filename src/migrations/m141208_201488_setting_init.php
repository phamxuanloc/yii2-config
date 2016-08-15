<?php
use yii\db\Migration;
use yii\db\Schema;

/**
 * CLass m141208_201480_setting_init
 * @package itzen\blog\migrations
 *
 * Create setting tables.
 *
 */
class m141208_201488_setting_init extends Migration {

	/**
	 * @inheritdoc
	 */
	public function up() {
		$driver       = $this->db->driverName;
		$tableOptions = "";
		if ($driver == 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
		}
		$this->createTable('{{%setting}}', [
			'id'          => Schema::TYPE_PK,
			'parent_id'   => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'code'        => Schema::TYPE_STRING . '(32) NOT NULL',
			'name'        => Schema::TYPE_STRING . '(255) NOT NULL',
			'desc'        => Schema::TYPE_TEXT . ' NULL',
			'type'        => 'enum("group","text","color","date","email","password","number","range","textarea","select","multiselect","radio","checkbox","roxymce") NOT NULL',
			'store_range' => Schema::TYPE_STRING . '(255)',
			'store_dir'   => Schema::TYPE_STRING . '(255)',
			'value'       => Schema::TYPE_TEXT . '',
			'sort_order'  => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 50',
		], $tableOptions);
		$this->createIndex('parent_id', '{{%setting}}', 'parent_id');
		$this->createIndex('code', '{{%setting}}', 'code');
		$this->createIndex('sort_order', '{{%setting}}', 'sort_order');
		$this->insert('{{%setting}}', [
			'id'          => 1,
			'parent_id'   => 0,
			'code'        => 'general',
			'name'        => 'General',
			'desc'        => '',
			'type'        => 'group',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '',
			'sort_order'  => 0,
		]);
		$this->insert('{{%setting}}', [
			'id'          => 11,
			'parent_id'   => 1,
			'code'        => 'site_name',
			'name'        => 'Site name',
			'desc'        => 'Name of site',
			'type'        => 'text',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => 'Your site name',
			'sort_order'  => 0,
		]);
		$this->insert('{{%setting}}', [
			'id'          => 12,
			'parent_id'   => 1,
			'code'        => 'site_title',
			'name'        => 'Site title',
			'desc'        => 'Title of site',
			'type'        => 'text',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => 'Your site title',
			'sort_order'  => 1,
		]);
		$this->insert('{{%setting}}', [
			'id'          => 13,
			'parent_id'   => 1,
			'code'        => 'site_keywords',
			'name'        => 'Site keywords',
			'desc'        => 'Keywords of site',
			'type'        => 'text',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => 'Your site keywords',
			'sort_order'  => 2,
		]);
	}

	/**
	 * @inheritdoc
	 */
	public function down() {
		$this->dropTable('{{%setting}}');
	}
}
