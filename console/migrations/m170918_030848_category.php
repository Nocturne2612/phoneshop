<?php

use yii\db\Migration;

class m170918_030848_category extends Migration
{
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%category}}', [
            'catId' => $this->primaryKey(),
            'catName' => $this->string()->notNull()->unique(),
            'parentId' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'dateCreate' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
       $this->dropTable('{{%category}}');
    }
}
