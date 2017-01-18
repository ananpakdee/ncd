<?php
use yii\db\Schema;
use yii\db\Migration;

class m170117_224404_post_table extends Migration
{
    public function up()
    {
        $this->createTable('post', [
             'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        $this->dropTable('post');
//echo "m170117_224404_post_table cannot be reverted.\n";

        //return false;
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
