<?php
use yii\db\Migration;
use yii\db\mysql\Schema;

class m160506_043343_modify_setting extends Migration {

	public function up() {
		$this->alterColumn('{{%setting}}', 'name', Schema::TYPE_STRING . '(255) NULL');
		$this->alterColumn('{{%setting}}', 'sort_order', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 50');
	}

	public function down() {
		echo "m160506_043343_modify_setting cannot be reverted.\n";
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
