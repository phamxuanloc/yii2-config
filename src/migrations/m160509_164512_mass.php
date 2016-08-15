<?php
use yii\db\Migration;
use yii\db\Schema;

class m160509_164512_mass extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->dropTable('{{%setting}}');
		$this->createTable('{{%setting}}', [
			'id'          => Schema::TYPE_PK . '',
			'parent_id'   => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "0"',
			'code'        => Schema::TYPE_STRING . '(32) NOT NULL',
			'name'        => Schema::TYPE_STRING . '(255)',
			'desc'        => Schema::TYPE_TEXT . '',
			'type'        => Schema::TYPE_SMALLINT . '(2) NOT NULL DEFAULT "1"',
			'store_range' => Schema::TYPE_STRING . '(255)',
			'store_dir'   => Schema::TYPE_STRING . '(255)',
			'value'       => Schema::TYPE_TEXT . '',
			'sort_order'  => Schema::TYPE_INTEGER . '(11) DEFAULT "50"',
		], $tableOptions);
		$this->createIndex('parent_id', '{{%setting}}', 'parent_id', 0);
		$this->createIndex('code', '{{%setting}}', 'code', 0);
		$this->createIndex('sort_order', '{{%setting}}', 'sort_order', 0);
		$this->insert('{{%setting}}', [
			'id'          => '19',
			'parent_id'   => '0',
			'code'        => 'general',
			'name'        => 'General tab',
			'desc'        => '',
			'type'        => '0',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '',
			'sort_order'  => '1',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '21',
			'parent_id'   => '19',
			'code'        => 'text_field',
			'name'        => 'Text Field',
			'desc'        => 'Example for text field',
			'type'        => '1',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => 'test text',
			'sort_order'  => '1',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '22',
			'parent_id'   => '19',
			'code'        => 'email_field',
			'name'        => 'Email field',
			'desc'        => 'Example for email field',
			'type'        => '2',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => 'email@test.com',
			'sort_order'  => '2',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '23',
			'parent_id'   => '19',
			'code'        => 'number_field',
			'name'        => 'Number field',
			'desc'        => 'Example for number field',
			'type'        => '3',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '123',
			'sort_order'  => '3',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '24',
			'parent_id'   => '19',
			'code'        => 'textarea_field',
			'name'        => 'Textarea Field',
			'desc'        => 'Example for Textarea field',
			'type'        => '4',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => 'A long sentence',
			'sort_order'  => '4',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '25',
			'parent_id'   => '19',
			'code'        => 'color_field',
			'name'        => 'Color field',
			'desc'        => 'Example for color field',
			'type'        => '5',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '#ff0000',
			'sort_order'  => '5',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '26',
			'parent_id'   => '19',
			'code'        => 'date_field',
			'name'        => 'Date field',
			'desc'        => 'Example for Date field',
			'type'        => '6',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '2016-05-10',
			'sort_order'  => '6',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '27',
			'parent_id'   => '19',
			'code'        => 'time_field',
			'name'        => 'Time field',
			'desc'        => 'Example for time field',
			'type'        => '7',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '23:07:45',
			'sort_order'  => '7',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '28',
			'parent_id'   => '19',
			'code'        => 'password_field',
			'name'        => 'Password field',
			'desc'        => 'Example for Password field',
			'type'        => '9',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '12345678',
			'sort_order'  => '8',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '29',
			'parent_id'   => '19',
			'code'        => 'roxymce_field',
			'name'        => 'RoxyMCE field',
			'desc'        => 'Example for RoxyMCE field',
			'type'        => '10',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '<p>This is a paragraph</p>',
			'sort_order'  => '9',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '30',
			'parent_id'   => '0',
			'code'        => 'additional',
			'name'        => 'Additional Tab',
			'desc'        => '',
			'type'        => '0',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '',
			'sort_order'  => '2',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '31',
			'parent_id'   => '30',
			'code'        => 'select_field',
			'name'        => 'Select field',
			'desc'        => 'Example for Single Selection',
			'type'        => '11',
			'store_range' => '1,2,3,abc,4,def,5,6',
			'store_dir'   => '',
			'value'       => '4',
			'sort_order'  => '1',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '32',
			'parent_id'   => '30',
			'code'        => 'multiselect_field',
			'name'        => 'Multiple select field',
			'desc'        => 'Example for Multiple Selection',
			'type'        => '12',
			'store_range' => 'ab,1,cd,2,3,4,de,ef,gh,7,8',
			'store_dir'   => '',
			'value'       => '1,4,5',
			'sort_order'  => '2',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '33',
			'parent_id'   => '30',
			'code'        => 'file_field',
			'name'        => 'File field',
			'desc'        => 'Example for File field',
			'type'        => '13',
			'store_range' => '',
			'store_dir'   => '@app/web/uploads',
			'value'       => 'dhdg.png',
			'sort_order'  => '3',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '34',
			'parent_id'   => '30',
			'code'        => 'url_field',
			'name'        => 'Url field',
			'desc'        => 'Example for Url field',
			'type'        => '14',
			'store_range' => '',
			'store_dir'   => '@app/web/uploads',
			'value'       => 'footer-top-logo.png',
			'sort_order'  => '4',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '35',
			'parent_id'   => '30',
			'code'        => 'percent_field',
			'name'        => 'Percent field',
			'desc'        => 'Example for Percent field',
			'type'        => '15',
			'store_range' => '',
			'store_dir'   => '',
			'value'       => '68',
			'sort_order'  => '5',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '36',
			'parent_id'   => '30',
			'code'        => 'switch_field',
			'name'        => 'Switch Option',
			'desc'        => 'Example for Switch option',
			'type'        => '16',
			'store_range' => 'no,yes',
			'store_dir'   => '',
			'value'       => '',
			'sort_order'  => '6',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '37',
			'parent_id'   => '30',
			'code'        => 'checkbox_option',
			'name'        => 'Checkbox Option',
			'desc'        => 'Example for checkbox option',
			'type'        => '17',
			'store_range' => '1,2,3,abc,4,def,5,6',
			'store_dir'   => '',
			'value'       => '2,4,6',
			'sort_order'  => '7',
		]);
		$this->insert('{{%setting}}', [
			'id'          => '38',
			'parent_id'   => '30',
			'code'        => 'radio_option',
			'name'        => 'Radio Option',
			'desc'        => 'Example for radio option',
			'type'        => '18',
			'store_range' => '1,2,3,abc,4,def,5,6',
			'store_dir'   => '',
			'value'       => 'def',
			'sort_order'  => '8',
		]);
	}

	public function safeDown() {
		$connection  = Yii::$app->db;
		$transaction = $connection->beginTransaction();
		try {
			$this->dropTable('{{%setting}}');
			$transaction->commit();
		} catch (Exception $e) {
			echo 'Catch Exception ' . $e->getMessage() . ' and rollBack this';
			$transaction->rollBack();
		}
	}
}
