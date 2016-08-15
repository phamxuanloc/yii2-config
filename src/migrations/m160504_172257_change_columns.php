<?php
use yii\db\Migration;
use yii\db\mysql\Schema;

class m160504_172257_change_columns extends Migration {

	public function up() {
		$this->alterColumn('{{%setting}}', 'type', Schema::TYPE_SMALLINT . '(2) NOT NULL DEFAULT 1');
	}

	public function down() {
		echo "m160504_172257_change_columns cannot be reverted.\n";
		return false;
	}
	/*
	// Use safeUp/safeDown to run migration code within a transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
